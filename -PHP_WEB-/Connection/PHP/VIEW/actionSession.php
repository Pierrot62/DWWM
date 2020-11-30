<?php


$action = $_GET['mode'];


if ($_GET['mode'] == "inscription") {



    if ($_POST['motDePasse'] == $_POST['confirmation']) {
        // recherche si le pseudo existe
        $uti = UtilisateursManager::findByPseudo($_POST['pseudo']);
        if ($uti == false) {
            $u = new Utilisateurs($_POST);
            //encodage du mot de passe
            $u->setMotDePasse(md5($u->getMotDePasse()));
            UtilisateursManager::add($u);
            header("location:index.php?codePage=connection");
        } else {
            echo "le pseudo existe deja";
            header("location:index.php?codePage=inscription");
        }
    } else {
        echo "la confirmation ne correspond pas au mot de passe";
        header("location:index.php?codePage=inscription");
    }

} elseif ($_GET['mode'] == "connection") {

    $uti = UtilisateursManager::findByPseudo($_POST['pseudo']);
    var_dump($uti);
    if ($uti != false) {
        // echo "motBDD ".$uti->getMotDePasse()."  saisi". $_POST['motDePasse']. "crypte   ".crypte($_POST['motDePasse'])."<br>";
        if (md5($_POST['motDePasse']) == $uti->getMotDePasse()) {
            echo 'connection reussie';
            $_SESSION['utilisateur'] = $uti;
            header("refresh:3;url=index.php?codePage=accueil");
        } else {
            echo 'le mot de passe est incorrect';
            header("refresh:3;url=index.php?codePage=connection");
        }
    } else {
        echo "le pseudo n'existe pas";
        header("refresh:3;url=index.php?codePage=connection");
    }

} elseif ($_GET['mode'] == "deconnection") {

    session_destroy();

    header("location:index.php?codePage=connection");
}
