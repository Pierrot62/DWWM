<?php
var_dump($_POST);
$uti = UtilisateursManager::getByEmailUtilisateur($_POST['eMail']);
var_dump($uti);
if ($uti != false && ($uti->getDatePeremption() == null || $uti->getDatePeremption() > new DateTime("NOW")))
{
    //echo "motBDD ".$uti->getMdpUtilisateur()."  saisi". $_POST['motDePasse']. "crypte   ".crypte($_POST['motDePasse'])."<br>";
    if (crypte($_POST['motDePasse']) == $uti->getMdpUtilisateur())
    {
        echo 'connection reussie';
        $_SESSION['utilisateur'] = $uti;
        // header("refresh:3;url=index.php?page=Accueil");
    }
    else
    {
        echo 'le mot de passe ou eMail est incorrect ';
        // header("refresh:3;url=index.php?page=FormConnexion");
    }
}
else
{
    echo 'l\'utilisateur n\'existe pas ';
//    header("refresh:3;url=index.php?page=FormConnexion");
}
