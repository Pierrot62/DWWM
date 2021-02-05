<?php
if (isset($_POST["eMail"])) {
    $uti = UtilisateursManager::getByEmail($_POST['eMail']);
}

$mode = isset($_GET["mode"])? $_GET["mode"]:"login";
switch ($mode) {
    case 'login':
        if ($uti != false && ($uti->getDatePeremption() == null || new DateTime($uti->getDatePeremption()) > new DateTime("NOW"))) {
            //echo "motBDD ".$uti->getMdpUtilisateur()."  saisi". $_POST['motDePasse']. "crypte   ".crypte($_POST['motDePasse'])."<br>";
            if ($_POST['motDePasse'] == $uti->getMdpUtilisateur()) {
                echo 'connection reussie';
                $_SESSION['utilisateur'] = $uti;
                var_dump($uti->getIdRole());
                switch ($uti->getIdRole()) {
                    case "1":
                        header("location: index.php?page=FormAdmin");
                        break;

                    case "2":
                        header("location: index.php?page=InterfaceFormateur");

                        break;
                    case "3":
                        header("location: index.php?page=ChoixStagiaireTuteur");

                        break;

                    case "4":
                        header("location: index.php?page=FormFRStagiaire");

                        break;
                    default:
                        header("location: index.php?page=default");
                        break;

                }

            } else {
                echo 'le mot de passe ou eMail est incorrect ';
                header("refresh:3;url=index.php?page=FormConnexion");
            }
        } else {
            echo 'l\'utilisateur n\'existe pas ';
            header("refresh:3;url=index.php?page=FormConnexion");
        }
        break;

    case 'logout':
        session_destroy();
        echo "ok";
        header("location: index.php?page=FormConnexion");
        break;
}
