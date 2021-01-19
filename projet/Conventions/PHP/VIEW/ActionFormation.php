<?php

$mode = $_GET['mode'];
var_dump($_POST);
$formation = new Formations($_POST);

switch($mode)
{
    case "ajouter":
    {
        FormationsManager::add($formation);
        break;
    }
    case "modifier":
    {
        FormationsManager::update($formation);
        break;
    }
    case "supprimer":
    {
        FormationsManager::delete($formation);
        break;
    }
}
header("location:Index.php?page=ListeFormations");
