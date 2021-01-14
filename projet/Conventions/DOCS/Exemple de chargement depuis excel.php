<?php

/*
    SUPPRIMER LA LIGNE D'EN-TÊTE COMME AVEC MATCHS
*/

// Page d'action après upload .xls pour des joueurs
// Affichage des erreurs
ini_set('display_errors', 1);

use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

// Initialisation d'un tableau contenant tous les types possibles de feuilles
// On vérifiera plus tard si le type du fichier téléchargé depuis la page d'upload
// fait partie du tableau
$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

if (isset($_FILES['xls-joueurs']['name']) && in_array($_FILES['xls-joueurs']['type'], $file_mimes)) {

    // Récupération du nom du fichier et son extension
    $arr_file = explode('.', $_FILES['xls-joueurs']['name']);
    $extension = end($arr_file);

    // Vérification du format
    if ('csv' == $extension) {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv(); // Si le format est '.csv'
    } else {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx(); // Si le format est '.xlsx'
    }

    // Lecture du fichier
    $spreadsheet = $reader->load($_FILES['xls-joueur']['tmp_name']);
    // Création d'un tableau contenant toutes les valeurs
    $sheetData = $spreadsheet->getActiveSheet()->toArray();
}

/* 
Structure du tableau retourné par la phpspreadsheet

array(109) { 
    [0]=> array(11) { 
        [0]=> string(16) "Numéro personne" 
        [1]=> string(9) "Né(e) le" 
        [2]=> string(3) "Nom" 
        [3]=> string(7) "Prénom" 
        [4]=> string(13) "Cachet (code)" 
        [5]=> string(17) "Cachet (libellé)" 
        [6]=> string(23) "Cachet (date de début)" 
        [7]=> string(20) "Cachet (date de fin)" 
        [8]=> string(16) "Mobile personnel" 
        [9]=> string(15) "Email principal" 
        [10]=> string(15) "Sous catégorie" 
    } 

    [1]=> array(11) { 
        [0]=> int(9602224352) 
        [1]=> string(10) "21/12/2012" 
        [2]=> string(4) "ABID" 
        [3]=> string(4) "Nael" 
        [4]=> string(0) "" 
        [5]=> string(0) "" 
        [6]=> string(0) "" 
        [7]=> string(0) "" 
        [8]=> int(672454207) 
        [9]=> string(26) "elodieverdonck@hotmail.com" 
        [10]=> string(12) "U9 (- 9 ans)" 
    } 
        
    [2]=> ...
*/


/*
    On parcourt la feuille .xls et on ajoute en BDD chaque personne présente
    Si la personne est déjà présente en BDD (identifiée par son n° de licence):

        - On récupère son rôle et on le met à jour si un nouveau rôle est disponible sur la feuille Excel.
        - On vérifie s'il n'y a pas de modification(s) à apporter en BDD
        - On ajoute / met à jour la personne

*/

// Création d'un tableau contenant chaque idCategorie => libCategorie
$listeCategories = CategorieManager::getList();

// On retranscrit les idCategorie + libCategorie de la base de données sous forme de string
foreach($listeCategories as $elt){
    $tabCategorie[] = $elt->getIdCategorie();
    $tabCategorie[][] = $elt->getLibCategorie();
}


// Parcours de la feuille Excel
foreach($sheetData as $elt){
    // On ne prend pas en compte la première ligne contenant les entêtes
    if($elt[0] != "Numéro personne"){

        // On vérifie la mutation, si elle est vide on la met à NULL en BDD
        if($elt[4] != ""){
            $tempMutation = $elt[4];
        }else{
            $tempMutation = NULL;
        }

        // Ajout d'un '0' au début du numéro de téléphone
        $tempTel = '0'.$elt[8];

        // Création d'un pseudo - format: [p_nom]
        $tempNom = strtolower($elt[2]);
        $tempPrenom = strtolower($elt[3]);

        // On récupère la première lettre du prénom et on concatène au nom
        $tempPseudo = $tempPrenom[0].$tempNom;
        /* Vérifier qu'il n'existe pas déjà en BDD */
        
        // Création du mot de passe pour la première connexion
        $oldPass = $elt[1];

        // On change son format pour y retirer les "-"
        $tempPass = str_replace("-", "", $oldPass);
        $tempPass = MD5($tempPass);

        
        // Assignation de l'idRole associé à la catégorie présente sur la feuille Excel
        switch($elt[10]){
            case "Dirigeant":
            case "Dirigeante":
                $tempRole = 6;
            break;
            case "Animateur":
            case "Educateur Fédéral":
            case "National":
            case "Régional":
                $tempRole = 2;
            break;
            case "Arbitre":
                $tempRole = 0;
            break;
            // Joueurs
            default:
                $tempRole = 3;
            break;
        }

        // On vérifie que $tempCategorie n'existe pas déjà,
        // S'il est déjà assigné, on passe outre cette brique
        if(!isset($tempCategorie)){
            // On vérifie si le libellé présent sur la feuille Excel est également dans le tableau de libellé en BDD
            if(in_array($elt[10], $tabCategorie)){
                // On recherche la clé associées dans $tabCategorie afin d'assigner au joueur le bon id
                $tempCategorie = array_search($elt[10], $tabCategorie);
                echo $tempIdCat;
            }
        }
        
        // On force le type string sur le numéro de licence (qui est considéré comme (int) par phpspreadsheet)
        $tempL = (string) $elt[0];

        // On force le type int sur l'idCategorie   
        if(isset($tempCategorie)){
            $tempCategorie = (int) $tempCategorie;
        }


        // On crée un objet temporaire de type Joueur
        $tempJ = new Joueur(['numLicence' => $tempL, 'nom' => $elt[2], 'prenom'=>$elt[3],'pseudo'=>$tempPseudo, 'pass'=>$tempPass, 'telUtilisateur' => $tempTel, 'mailUtilisateur' => $elt[9], 'idRole' => $tempRole, 'idCategorie' => $tempCategorie]);

        // On vérifie s'il est déjà en BDD
        // S'il est déjà présent en BDD
        if(JoueurManager::findByNumLicence($tempL) != false){
            // S'il est en BDD, on le met à jour
            JoueurManager::update($tempJ);
        }else{
            // S'il n'est pas encore en BDD, on l'ajoute
            JoueurManager::add($tempJ);
        }
    }
}