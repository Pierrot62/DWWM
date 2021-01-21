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
	"default"=>["PHP/VIEW/","Accueil","Accueil",false],
	// "TestanimationManager"=>["PHP/MODEL/TESTMANAGER/","TestanimationManager","Test de animation"],
	// "TestcomportementsprofessionnelsManager"=>["PHP/MODEL/TESTMANAGER/","TestcomportementsprofessionnelsManager","Test de comportementsprofessionnels"],
	// "TestentreprisesManager"=>["PHP/MODEL/TESTMANAGER/","TestentreprisesManager","Test de entreprises"],
	// "TestevaluationsManager"=>["PHP/MODEL/TESTMANAGER/","TestevaluationsManager","Test de evaluations"],
	// "TestformationsManager"=>["PHP/MODEL/TESTMANAGER/","TestformationsManager","Test de formations"],
	// "TesthorairesManager"=>["PHP/MODEL/TESTMANAGER/","TesthorairesManager","Test de horaires"],
	// "TestparticipationManager"=>["PHP/MODEL/TESTMANAGER/","TestparticipationManager","Test de participation"],
	// "TestrolesManager"=>["PHP/MODEL/TESTMANAGER/","TestrolesManager","Test de roles"],
	// "TestsessionformationManager"=>["PHP/MODEL/TESTMANAGER/","TestsessionformationManager","Test de sessionformation"],
	// "TeststagesManager"=>["PHP/MODEL/TESTMANAGER/","TeststagesManager","Test de stages"],
	// "TeststagiairesManager"=>["PHP/MODEL/TESTMANAGER/","TeststagiairesManager","Test de stagiaires"],
	// "TesttravauxdangereuxManager"=>["PHP/MODEL/TESTMANAGER/","TesttravauxdangereuxManager","Test de travauxdangereux"],
	// "TesttuteursManager"=>["PHP/MODEL/TESTMANAGER/","TesttuteursManager","Test de tuteurs"],
	// "TestutilisateursManager"=>["PHP/MODEL/TESTMANAGER/","TestutilisateursManager","Test de utilisateurs"],
	// "TestvillesManager"=>["PHP/MODEL/TESTMANAGER/","TestvillesManager","Test de villes"],
		
	"FormConnexion" => ["PHP/VIEW/", "FormConnexion", "Identification",false],
	"ActionConnexion" => ["PHP/VIEW/", "ActionConnexion", "Identification",false],
	"ActionDeconnexion" => ["PHP/VIEW/", "ActionDeconnexion", "Identification",false],
	"FormAdmin" => ["PHP/VIEW/", "FormAdmin", "Identification",false],
	
	/* Fiche de renseignements  */
	"FormFRStagiaire" => ["PHP/VIEW/", "FormFRStagiaire", "Fiche de renseignements",false],
	"FormFREntreprise" => ["PHP/VIEW/", "FormFREntreprise", "Fiche de renseignements",false],
	"FormFRSujetStage" => ["PHP/VIEW/", "FormFRSujetStage", "Fiche de renseignements",false],
	"FormFRCondition" => ["PHP/VIEW/", "FormFRCondition", "Fiche de renseignements",false],
	"FormFREvaluation" => ["PHP/VIEW/", "FormFREvaluation", "Fiche de renseignements",false],
	"Menu" => ["PHP/VIEW/", "Menu", "Remplissage Des Informations De Stages",false],
	"ActionFormFRStagiaire" => ["PHP/VIEW/", "ActionFormFRStagiaire", "Fiche de renseignements",false],
	
	/* CRUD */
	"ListeFormations" => ["PHP/VIEW/", "ListeFormations", "Gestion des formations",false],
	"FormFormation" => ["PHP/VIEW/", "FormFormation", "Gestion des formations",false],
	"ActionFormation" => ["PHP/VIEW/", "ActionFormation", "Gestion des formations",false],

	"ListeSessions" => ["PHP/VIEW/", "ListeSessions", "Gestion des sessions",false],
	"FormSession" => ["PHP/VIEW/", "FormSession", "Gestion des sessions",false],
	"ActionSession" => ["PHP/VIEW/", "ActionSession", "Gestion des sessions",false],

	"ListeUtilisateurs" => ["PHP/VIEW/", "ListeUtilisateurs", "Gestion des Utilisateurs",false],
	"FormUtilisateur" => ["PHP/VIEW/", "FormUtilisateur", "Gestion des Utilisateurs",false],
	"ActionUtilisateur" => ["PHP/VIEW/", "ActionUtilisateur", "Gestion des Utilisateurs",false],

	"ListeEntreprises" => ["PHP/VIEW/", "ListeEntreprises", "Gestion des Entreprises",false],
	"FormEntreprise" => ["PHP/VIEW/", "FormEntreprise", "Gestion des Entreprises",false],
	"ActionEntreprise" => ["PHP/VIEW/", "ActionEntreprise", "Gestion des Entreprises",false],

	"ListeStagiaires" => ["PHP/VIEW/", "ListeStagiaires", "Gestion des Stagiaires",false],
	"FormStagiaire" => ["PHP/VIEW/", "FormStagiaire", "Gestion des Stagiaires",false],
	"ActionStagiaire" => ["PHP/VIEW/", "ActionStagiaire", "Gestion des Stagiaires",false],

	/* API */
	"VillesAPI" => ["PHP/MODEL/API/", "VillesAPI", "Gestion des Entreprises",true],


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