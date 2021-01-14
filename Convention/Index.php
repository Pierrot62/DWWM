<?php

require("./Outils.php");

Parametres::init();

DbConnect::init();

session_start();

/******Les langues******/
/***On récupère la langue***/
if (isset($_GET['lang']))
{
	$_SESSION['lang'] = $_GET['lang'];
}

/***On récupère la langue de la session/FR par défaut***/
$lang=isset($_SESSION['lang']) ? $_SESSION['lang'] : 'FR';
/******Fin des langues******/

$routes=[
	"default"=>["PHP/VIEW/","accueil","Accueil"],
	"TestanimationManager"=>["PHP/MODEL/TESTMANAGER/","TestanimationManager","Test de animation"],
	"TestentreprisesManager"=>["PHP/MODEL/TESTMANAGER/","TestentreprisesManager","Test de entreprises"],
	"TestevaluationsManager"=>["PHP/MODEL/TESTMANAGER/","TestevaluationsManager","Test de evaluations"],
	"TestformationsManager"=>["PHP/MODEL/TESTMANAGER/","TestformationsManager","Test de formations"],
	"TestlibellecomportementsprofessionnelsManager"=>["PHP/MODEL/TESTMANAGER/","TestlibellecomportementsprofessionnelsManager","Test de libellecomportementsprofessionnels"],
	"TestlibellehorairesManager"=>["PHP/MODEL/TESTMANAGER/","TestlibellehorairesManager","Test de libellehoraires"],
	"TestlibelletravauxdangereuxManager"=>["PHP/MODEL/TESTMANAGER/","TestlibelletravauxdangereuxManager","Test de libelletravauxdangereux"],
	"TestparticipationManager"=>["PHP/MODEL/TESTMANAGER/","TestparticipationManager","Test de participation"],
	"TestrolesManager"=>["PHP/MODEL/TESTMANAGER/","TestrolesManager","Test de roles"],
	"TestsessionformationManager"=>["PHP/MODEL/TESTMANAGER/","TestsessionformationManager","Test de sessionformation"],
	"TeststagesManager"=>["PHP/MODEL/TESTMANAGER/","TeststagesManager","Test de stages"],
	"TeststagiairesManager"=>["PHP/MODEL/TESTMANAGER/","TeststagiairesManager","Test de stagiaires"],
	"TesttuteursManager"=>["PHP/MODEL/TESTMANAGER/","TesttuteursManager","Test de tuteurs"],
	"TestutilisateursManager"=>["PHP/MODEL/TESTMANAGER/","TestutilisateursManager","Test de utilisateurs"],
	"TestvaleuracquisManager"=>["PHP/MODEL/TESTMANAGER/","TestvaleuracquisManager","Test de valeuracquis"],
	"TestvaleurcomportementsprofessionnelsManager"=>["PHP/MODEL/TESTMANAGER/","TestvaleurcomportementsprofessionnelsManager","Test de valeurcomportementsprofessionnels"],
	"TestvaleurhorairesManager"=>["PHP/MODEL/TESTMANAGER/","TestvaleurhorairesManager","Test de valeurhoraires"],
	"TestvaleurtravauxdangereuxManager"=>["PHP/MODEL/TESTMANAGER/","TestvaleurtravauxdangereuxManager","Test de valeurtravauxdangereux"],
	"TestvillesManager"=>["PHP/MODEL/TESTMANAGER/","TestvillesManager","Test de villes"],
];

if(isset($_GET["page"]))
{

	$page=$_GET["page"];

	if(isset($routes[$page]))
	{
		AfficherPage($routes[$page]);
	}
	else
	{
		AfficherPage($routes["default"]);
	}
}
else
{
	AfficherPage($routes["default"]);
}