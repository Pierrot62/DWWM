<?php
$stagiaire = new Stagiaires($_POST);
StagiairesManager::update($stagiaire);

$tuteur = new Tuteurs($_POST);
TuteursManager::add($tuteur);
$recupTuteur = TuteursManager::getByEmail($tuteur->getEmailTuteur());

$idPeriode = $_POST['idPeriode'];
$periode = PeriodesStagesManager::findById($idPeriode);
$stage = new Stages($_POST);
$stage->setIdTuteur($recupTuteur->getIdTuteur());
$stage->setEtape(1);
$stage->setDateDebut($periode->getDateDebutPAE());
$stage->setDateFin($periode->getDateFinPAE());
$stage->setObjectifPAE($periode->getObjectifPAE());
StagesManager::add($stage);

$utilisateur = new Utilisateurs();
$utilisateur->setNomUtilisateur($recupTuteur->getNomTuteur());
$utilisateur->setPrenomUtilisateur($recupTuteur->getPrenomTuteur());
$utilisateur->setEmailUtilisateur($recupTuteur->getEmailTuteur());
$utilisateur->setIdRole(3);
$utilisateur->setMdpUtilisateur($utilisateur->getPrenomUtilisateur().$utilisateur->getNomUtilisateur().$stagiaire->getNumBenefStagiaire());

$date = date_create_from_format("Y-m-d",$stage->getDateFin());
$newdate = date_add($date,date_interval_create_from_date_string("15 days"));
$utilisateur->setDatePeremption($newdate->format("Y-m-d"));
UtilisateursManager::add($utilisateur);
header("location:Index.php?page=FormFRStagiaire");




