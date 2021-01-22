<?php

$mode=$_GET['mode'];

$Utilisateur = new Utilisateurs($_POST);



switch($mode)
{
    case "ajouter":
    {
        UtilisateursManager::add($Utilisateur);
        break;
    }
    case "modifier":
    {
        UtilisateursManager::update($Utilisateur);
        break;
    }
    case "supprimer":
    {
        UtilisateursManager::delete($Utilisateur);
        break;
    }

}
header("location:index.php?page=ListeStagiaires");