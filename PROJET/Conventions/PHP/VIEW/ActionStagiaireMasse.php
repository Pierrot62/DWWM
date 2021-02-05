<?php
require 'vendor/autoload.php';
//Affichage des erreurs
ini_set('display_errors',1);
//  var_dump($_POST);
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

// On initialise un tableau contenant tous les types possibles de feuilles

$files_mimes= array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

if(isset($_FILES['xls-stagiaires']['name']) && in_array($_FILES['xls-stagiaires']['type'], $files_mimes)){

    //On récupère le nom du fichier et son extension
    $arr_file = explode('.',$_FILES['xls-stagiaires']['name']);

    $extension =end($arr_file);

    //On vérifie le format
    if($extension=='csv')
    {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();   //format csv
    }
    else
    {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();  //format xlsx
    }

    //Lecture  du fichier
    $spreadsheet= $reader->load($_FILES['xls-stagiaires']['tmp_name']);
    //Récupération de la cellule contenant la formation
    $libelleFormation = $spreadsheet->getActiveSheet()->getCell('B1')->getValue();
    $libelleFormation= substr($libelleFormation, 0, -9);
    var_dump($libelleFormation);

    //Récupération de la cellule contenant le numéro de l'offre
    $numOffreFormation = $spreadsheet->getActiveSheet()->getCell('C3')->getValue();
    var_dump($numOffreFormation);


    //On crée un tableau contenant toutes les valeurs du fichier
    $sheetData= $spreadsheet->getActiveSheet()->toArray();
    // var_dump($sheetData);
}

//On parcourt la feuille excel

if(!empty($sheetData))
{
    for($i=5; $i<count($sheetData); $i++)
    //for($i=5; $i<6; $i++)
    {
    
         // $tempGenreStagiaire = $elt[1];
        $tempNomStagiaire = $sheetData[$i][1];
        $tempPrenomStagiaire = $sheetData[$i][3];
        $tempNumBenefStagiaire = $sheetData[$i][0];
        
         // $tempNumSecuStagiaire = $elt[5];
        $ddn =  new DateTime($sheetData[$i][4]);
       $tempDateNaissanceStagiaire =  $ddn->format("Y-m-d");
       $tempEmailStagiaire = $sheetData[$i][10];
        
 
        //On crée un objet stagiaire temporaire
    
        $tempStagiaire = new Stagiaires(["nomStagiaire"=>$tempNomStagiaire,"prenomStagiaire"=>$tempPrenomStagiaire, "numBenefStagiaire"=>$tempNumBenefStagiaire,"dateNaissanceStagiaire"=>$tempDateNaissanceStagiaire,"emailStagiaire"=>$tempEmailStagiaire]);
        
var_dump($tempStagiaire);
       
    //    if($sheetData[$i][1] != "")
    //    {    
    //         // On vérifie s'il est déja en BDD
   
            if(StagiairesManager::getByEmail($tempEmailStagiaire) != false)
            {
             
                StagiairesManager::update($tempStagiaire);                      //Si oui, on update
            }
            else
            {  
                 echo "toto";
                StagiairesManager::add($tempStagiaire);                         //Si non, on l'ajoute
            }
        //}
    }
} 




// header("location:index.php?page=ListeStagiaires");