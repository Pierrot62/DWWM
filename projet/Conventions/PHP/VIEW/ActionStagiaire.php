<?php

$mode=$_GET['mode'];

$stagiaire = new Stagiaires($_POST);
// var_dump($stagiaire);


switch($mode)
{
    case "ajouter":
    {
        StagiairesManager::add($stagiaire);
        break;
    }
    case "modifier":
    {
        StagiairesManager::update($stagiaire);
        break;
    }
    case "supprimer":
    {
        StagiairesManager::delete($stagiaire);
        break;
    }

}

header("location:index.php?page=ListeStagiaires");