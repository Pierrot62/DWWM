<?php
// var_dump($_POST['emailTuteur']);

$stagiaire = new Stagiaires($_POST);

$tuteur = new Tuteurs($_POST);
TuteursManager::add($tuteur);

$recupTuteur = TuteursManager::getByEmail($tuteur->getEmailTuteur());


$stage = new Stages($_POST);
$stage->setIdTuteur($recupTuteur->getIdTuteur());
var_dump($stage);
$utilisateur = new Utilisateurs($_POST);

// var_dump($stagiaire);

StagiairesManager::update($stagiaire);
StagesManager::add($stage);
UtilisateursManager::add($utilisateur);



//Add du tuteur
// $tuteur = new Tuteur ([ "idTuteur" => NULL])

// header("location:Index.php?page=FormFRStagiaire");


// ([ "idStagiaire" => $_POST['idStagiaire'] ,"prenomStagiaire" => $_POST['prenomStagiaire'], "nomStagiaire" => $_POST['nomStagiaire'], "genreStagiaire" => $_POST['genreStagiaire'], "numSecuStagiaire" => $_POST['numSecuStagiaire'], "numBenefStagiaire" => $_POST['numBenefStagiaire'] , "dateNaissanceStagiaire" => $_POST['dateNaissanceStagiaire'], "emailStagiaire" => $_POST['emailStagiaire']]);