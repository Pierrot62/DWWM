<?php

include 'logDb.php';
include 'Employe.Class.php';

// $requete=$db->query("SELECT idEmploye, nom, prenom, fonction FROM employe WHERE idEmploye=1");
// $reponse= $requete->fetch(PDO::FETCH_ASSOC);
// $employe = new Employe($reponse);
// $employe->affichage();


$requete=$db->query("SELECT idEmploye, nom, prenom, fonction FROM employe");
while ($data = $requete->fetch(PDO::FETCH_ASSOC))
{
    $employes[]= new Employe($data);
}

foreach ($employes as $employe) {
    echo 'Nom employe : '.$employe->getnom().'<br>';
    echo 'Prenom employe : '.$employe->getprenom().'<br>';
    echo 'Fonction employe : '.$employe->getfonction().'<br>';
}
