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
	"default"=>["PHP/VIEW/","Accueil","Accueil"],
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
		
	"FormConnexion" => ["PHP/VIEW/", "FormConnexion", "Identification"],
	"ActionConnexion" => ["PHP/VIEW/", "ActionConnexion", "Identification"],
	"ActionDeconnexion" => ["PHP/VIEW/", "ActionDeconnexion", "Identification"],
	
	/* Fiche de renseignments  */
	"FormFRStagiaire" => ["PHP/VIEW/", "FormFRStagiaire", "Fiche de renseignments"],
	"FormFREntreprise" => ["PHP/VIEW/", "FormFREntreprise", "Fiche de renseignments"],
	
	/* CRUD */
	"ListeFormations" => ["PHP/VIEW/", "ListeFormations", "Gestion des formations"],
	"FormFormation" => ["PHP/VIEW/", "FormFormation", "Gestion des formations"],
	"ActionFormation" => ["PHP/VIEW/", "ActionFormation", "Gestion des formations"],

	"ListeSessions" => ["PHP/VIEW/", "ListeSessions", "Gestion des sessions"],
	"FormSession" => ["PHP/VIEW/", "FormSession", "Gestion des sessions"],
	"ActionSession" => ["PHP/VIEW/", "ActionSession", "Gestion des sessions"],

	"ListeUtilisateurs" => ["PHP/VIEW/", "ListeUtilisateurs", "Gestion des Utilisateurs"],
	"FormUtilisateur" => ["PHP/VIEW/", "FormUtilisateur", "Gestion des Utilisateurs"],
	"ActionUtilisateur" => ["PHP/VIEW/", "ActionUtilisateur", "Gestion des Utilisateurs"],

	"ListeEntreprises" => ["PHP/VIEW/", "ListeEntreprises", "Gestion des Entreprises"],
	"FormEntreprise" => ["PHP/VIEW/", "FormEntreprise", "Gestion des Entreprises"],
	"ActionEntreprise" => ["PHP/VIEW/", "ActionEntreprise", "Gestion des Entreprises"],
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