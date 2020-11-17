<?php

include 'logDb.php';
function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");


/********************************************/
/*****          REQUETE SIMPLE          *****/
/********************************************/

// $requete=$db->query("SELECT idEmploye, nom, prenom, fonction FROM employe WHERE idEmploye=1");
// $reponse= $requete->fetch(PDO::FETCH_ASSOC);
// $employe = new Employe($reponse);
// $employe->affichage();


/********************************************/
/*****  REQUETE AVEC RESULTAT MULTIPLE  *****/
/********************************************/

// $requete=$db->query("SELECT idEmploye, nom, prenom, fonction FROM employe");
// while ($data = $requete->fetch(PDO::FETCH_ASSOC))
// {
//     $employes[]= new Employe($data);
// }

// foreach ($employes as $employe) {
//     echo 'Nom employe : '.$employe->getnom().'<br>';
//     echo 'Prenom employe : '.$employe->getprenom().'<br>';
//     echo 'Fonction employe : '.$employe->getfonction().'<br>';
// }

/********************************************/
/*****      REQUETE d'AJOUT SIMPLE      *****/
/********************************************/

// $q = $db->exec('INSERT INTO employe(nom, prenom, fonction) VALUES("Balair","Quentin","Comi de cuisine")');
// $q = $db->exec('INSERT INTO employe(nom, prenom, fonction) VALUES("Rjeb","Zied","Kebabiste")');
// $q = $db->exec('INSERT INTO employe(nom, prenom, fonction) VALUES("Balair","Quentin","Comi de cuisine")');
// //$q contient le nombre de ligne impactée ou false si la requete a echouée
// var_dump($q);


/********************************************/
/*****     REQUETE d'AJOUT COMPOSEE     *****/
/********************************************/

$e = new Employe(["nom" => "Poix", "prenom" => "Martine", "fonction" => "formatrice"]);


$q = $db->prepare('INSERT INTO employe(nom, prenom, fonction) VALUES("'.$e->getnom().'","'.$e->getprenom().'","'.$e->getfonction().'")');

$q->execute();