<?php

$mode = $_GET['mode'];

if (isset($_GET['id'])) // si l'id est renseigné
{

    $idRecu = $_GET['id'];
    if ($idRecu != false) {
        $idChoisi = SessionsFormationsManager::findById($idRecu);

    }
}
    $session = new SessionsFormations ($_POST);

    switch ($mode) {
        case "ajout":{
            SessionsFormationsManager::add($session);
                break;
            }
        case "modif":{
            SessionsFormationsManager::update($session);
                break;
            }
        case "delete":{
            SessionsFormationsManager::delete($session);
                break;
            }

    }

header("location: Index.php?page=ListeSessions");
