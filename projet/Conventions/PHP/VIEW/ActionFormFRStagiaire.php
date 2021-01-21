<?php

$stagiaire = new Stagiaires($_POST);
StagiairesManager::update($stagiaire);

$tuteur = new Tuteurs($_POST);
TuteursManager::add($tuteur);
$recupTuteur = TuteursManager::getByEmail($tuteur->getEmailTuteur());

$stage = new Stages($_POST);
$stage->setIdTuteur($recupTuteur->getIdTuteur());
StagesManager::add($stage);

$utilisateur = new Utilisateurs($_POST);
$utilisateur->setNomUtilisateur($recupTuteur->getNomTuteur());
$utilisateur->setPrenomUtilisateur($recupTuteur->getPrenomTuteur());
$utilisateur->setEmailUtilisateur($recupTuteur->getEmailTuteur());
UtilisateursManager::add($utilisateur);

header("location:Index.php?page=FormFRStagiaire");




