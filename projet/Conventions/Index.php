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
	/**** DEFAULT *****/
	"default" => ["PHP/VIEW/", "FormConnexion", "Choisissez la catégorie a compléter :",false],
	
	"FormConnexion" => ["PHP/VIEW/", "FormConnexion", "Identification",false],
	"ActionConnexion" => ["PHP/VIEW/", "ActionConnexion", "Identification",false],
	"ActionDeconnexion" => ["PHP/VIEW/", "ActionDeconnexion", "Identification",false],
	"FormAdmin" => ["PHP/VIEW/", "FormAdmin", "Identification",false],
	"InterfaceFormateur" => ["PHP/VIEW/", "InterfaceFormateur", "Gestion des stages",false],
	
	/**** MENU ****/
	"MenuFR" => ["PHP/VIEW/", "MenuFR", "Choisissez la catégorie a compléter :",false],

	/**** Fiche de renseignements  ****/
	"FormFRStagiaire" => ["PHP/VIEW/", "FormFRStagiaire", "Fiche de renseignements",false],
	"FormFREntreprise" => ["PHP/VIEW/", "FormFREntreprise", "Fiche de renseignements",false],
	"FormFRSujetStage" => ["PHP/VIEW/", "FormFRSujetStage", "Fiche de renseignements",false],
	"FormFRCondition" => ["PHP/VIEW/", "FormFRCondition", "Fiche de renseignements",false],
	"FormFREvaluation" => ["PHP/VIEW/", "FormFREvaluation", "Fiche de renseignements",false],
	"ActionFormFRStagiaire" => ["PHP/VIEW/", "ActionFormFRStagiaire", "Fiche de renseignements",false],
	"ActionFormFREntreprise" => ["PHP/VIEW/", "ActionFormFREntreprise", "Fiche de renseignements",false],
	"ActionFormFRSujetStage" => ["PHP/VIEW/", "ActionFormFRSujetStage", "Fiche de renseignements",false],
	"ActionFormFRCondition" => ["PHP/VIEW/", "ActionFormFRCondition", "Fiche de renseignements",false],
	"ActionFormFREvaluation" => ["PHP/VIEW/", "ActionFormFREvaluation", "Fiche de renseignements",false],
	"ChoixStagiaireTuteur" => ["PHP/VIEW/", "ChoixStagiaireTuteur", "Choisissez le Stagiaire :",false],
	"FormFRInfosStagiaire" => ["PHP/VIEW/", "FormFRInfosStagiaire", "Identification",false],
	
	/***** CRUD ****/
	"ListeFormations" => ["PHP/VIEW/", "ListeFormations", "Gestion des formations",false],
	"FormFormation" => ["PHP/VIEW/", "FormFormation", "Gestion des formations",false],
	"ActionFormation" => ["PHP/VIEW/", "ActionFormation", "Gestion des formations",false],

	"ListeSessions" => ["PHP/VIEW/", "ListeSessions", "Gestion des offres",false],
	"FormSession" => ["PHP/VIEW/", "FormSession", "Gestion des offres",false],
	"FormPeriode" => ["PHP/VIEW/", "FormPeriode", "Gestion des périodes",false],
	"ActionSession" => ["PHP/VIEW/", "ActionSession", "Gestion des offres",false],

	"ListeUtilisateurs" => ["PHP/VIEW/", "ListeUtilisateurs", "Gestion des Utilisateurs",false],
	"FormUtilisateur" => ["PHP/VIEW/", "FormUtilisateur", "Gestion des Utilisateurs",false],
	"ActionUtilisateur" => ["PHP/VIEW/", "ActionUtilisateur", "Gestion des Utilisateurs",false],

	"ListeEntreprises" => ["PHP/VIEW/", "ListeEntreprises", "Gestion des Entreprises",false],
	"FormEntreprise" => ["PHP/VIEW/", "FormEntreprise", "Gestion des Entreprises",false],
	"ActionEntreprise" => ["PHP/VIEW/", "ActionEntreprise", "Gestion des Entreprises",false],

	"ListeStagiaires" => ["PHP/VIEW/", "ListeStagiaires", "Gestion des Stagiaires",false],
	"FormStagiaire" => ["PHP/VIEW/", "FormStagiaire", "Gestion des Stagiaires",false],
	"FormStagiaireMasse" => ["PHP/VIEW/", "FormStagiaireMasse", "Gestion des Stagiaires",false],
	"ActionStagiaire" => ["PHP/VIEW/", "ActionStagiaire", "Gestion des Stagiaires",false],
	"ActionStagiaireMasse" => ["PHP/VIEW/", "ActionStagiaireMasse", "Gestion des Stagiaires",false],

	/**** API ****/
	"VillesAPI" => ["PHP/MODEL/API/", "VillesAPI", "Gestion des Entreprises",true],
	"SiretAPI" => ["PHP/MODEL/API/", "SiretAPI", "Gestion des Entreprises",true],
	"SessionAPI"=>["PHP/MODEL/API/","SessionAPI","Accueil",true],
	"ListeStagiairesAPI"=>["PHP/MODEL/API/","ListeStagiairesAPI","Accueil",true],
	"GetObjectifAPI"=>["PHP/MODEL/API/","GetObjectifAPI","Accueil",true],
	"SetObjectifAPI"=>["PHP/MODEL/API/","SetObjectifAPI","Accueil",true],
	

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