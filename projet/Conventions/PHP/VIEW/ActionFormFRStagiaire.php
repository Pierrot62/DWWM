<?php
var_dump($_POST);

//Update du stagiaire
$stagiaire = new Stagiaires($_POST);
$tuteur = new Tuteurs($_POST);
$stage = new Stages($_POST);
$utilisateur = new Utilisateurs($_POST);
// var_dump($stagiaire);

StagiairesManager::update($stagiaire);
TuteursManager::add($tuteur);
StagesManager::add($stage);
UtilisateursManager::add($utilisateur);

//Add du tuteur
// $tuteur = new Tuteur ([ "idTuteur" => NULL])

// header("location:Index.php?page=FormFRStagiaire");


// ([ "idStagiaire" => $_POST['idStagiaire'] ,"prenomStagiaire" => $_POST['prenomStagiaire'], "nomStagiaire" => $_POST['nomStagiaire'], "genreStagiaire" => $_POST['genreStagiaire'], "numSecuStagiaire" => $_POST['numSecuStagiaire'], "numBenefStagiaire" => $_POST['numBenefStagiaire'] , "dateNaissanceStagiaire" => $_POST['dateNaissanceStagiaire'], "emailStagiaire" => $_POST['emailStagiaire']]);