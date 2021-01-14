<?php
$uti = UtilisateursManager::findByEmail($_POST['eMail']);
if ($uti != false &&(  $uti->getDatePeremption() !=null || $uti->getDatePeremption()>DateTime("NOW")))
{
    //echo "motBDD ".$uti->getMdpUtilisateur()."  saisi". $_POST['motDePasse']. "crypte   ".crypte($_POST['motDePasse'])."<br>";
    if (crypte($_POST['motDePasse']) == $uti->getMdpUtilisateur())
    {
        echo 'connection reussie';
        $_SESSION['utilisateur']=$uti;
        header("refresh:3;url=index.php?page=Accueil");
    }
    else
    {
        echo 'le mot de passe ou eMail est incorrect ';
        header("refresh:3;url=index.php?page=FormConnexion");
    }
}
