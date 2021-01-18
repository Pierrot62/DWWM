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
	"TestanimationsManager"=>["PHP/MODEL/TESTMANAGER/","TestanimationsManager","Test de animations"],
	"TestdepartementsManager"=>["PHP/MODEL/TESTMANAGER/","TestdepartementsManager","Test de departements"],
	"TestentreprisesManager"=>["PHP/MODEL/TESTMANAGER/","TestentreprisesManager","Test de entreprises"],
	"TestevaluationsManager"=>["PHP/MODEL/TESTMANAGER/","TestevaluationsManager","Test de evaluations"],
	"TestformationsManager"=>["PHP/MODEL/TESTMANAGER/","TestformationsManager","Test de formations"],
	"TestlibellescomportementsprofessionnelsManager"=>["PHP/MODEL/TESTMANAGER/","TestlibellescomportementsprofessionnelsManager","Test de libellescomportementsprofessionnels"],
	"TestlibelleshorairesManager"=>["PHP/MODEL/TESTMANAGER/","TestlibelleshorairesManager","Test de libelleshoraires"],
	"TestlibellestravauxdangereuxManager"=>["PHP/MODEL/TESTMANAGER/","TestlibellestravauxdangereuxManager","Test de libellestravauxdangereux"],
	"TestparticipationsManager"=>["PHP/MODEL/TESTMANAGER/","TestparticipationsManager","Test de participations"],
	"TestregionsManager"=>["PHP/MODEL/TESTMANAGER/","TestregionsManager","Test de regions"],
	"TestrolesManager"=>["PHP/MODEL/TESTMANAGER/","TestrolesManager","Test de roles"],
	"TestsessionsformationsManager"=>["PHP/MODEL/TESTMANAGER/","TestsessionsformationsManager","Test de sessionsformations"],
	"TeststagesManager"=>["PHP/MODEL/TESTMANAGER/","TeststagesManager","Test de stages"],
	"TeststagiairesManager"=>["PHP/MODEL/TESTMANAGER/","TeststagiairesManager","Test de stagiaires"],
	"TesttuteursManager"=>["PHP/MODEL/TESTMANAGER/","TesttuteursManager","Test de tuteurs"],
	"TestutilisateursManager"=>["PHP/MODEL/TESTMANAGER/","TestutilisateursManager","Test de utilisateurs"],
	"TestvaleursacquisManager"=>["PHP/MODEL/TESTMANAGER/","TestvaleursacquisManager","Test de valeursacquis"],
	"TestvaleurscomportementsprofessionnelsManager"=>["PHP/MODEL/TESTMANAGER/","TestvaleurscomportementsprofessionnelsManager","Test de valeurscomportementsprofessionnels"],
	"TestvaleurshorairesManager"=>["PHP/MODEL/TESTMANAGER/","TestvaleurshorairesManager","Test de valeurshoraires"],
	"TestvaleurstravauxdangereuxManager"=>["PHP/MODEL/TESTMANAGER/","TestvaleurstravauxdangereuxManager","Test de valeurstravauxdangereux"],
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