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
	"TestelevesManager"=>["PHP/MODEL/TESTMANAGER/","TestelevesManager","Test de eleves"],
	"TestmatieresManager"=>["PHP/MODEL/TESTMANAGER/","TestmatieresManager","Test de matieres"],
	"TestsuivisManager"=>["PHP/MODEL/TESTMANAGER/","TestsuivisManager","Test de suivis"],
	"TestutilisateurManager"=>["PHP/MODEL/TESTMANAGER/","TestutilisateurManager","Test de utilisateur"],

	"FormConnect"=>["PHP/VIEW/","FormConnect","Connection"],
	"FormEleve"=>["PHP/VIEW/","FormEleve","Ajouter un eleve"],
	"FormNote"=>["PHP/VIEW/","FormNote","Ajouter une note"],
	"FormEnseignant"=>["PHP/VIEW/","FormEnseignant","Ajouter un enseignant"],
	"FormMatiere"=>["PHP/VIEW/","FormMatiere","Ajouter une matieres"],

	"ListEleves"=>["PHP/VIEW/","ListEleves","Gestion des eleves"],
	"ListNote"=>["PHP/VIEW/","ListNote","Gestion des notes"],
	"ListEnseignant"=>["PHP/VIEW/","ListEnseignant","Gestion des Enseignants"],
	"ListMatiere"=>["PHP/VIEW/","ListMatiere","Gestions des matieres"],

	"ActionConnect"=>["PHP/VIEW/","ActionConnect","connection"],
	"ActionEleve"=>["PHP/VIEW/","ActionEleve","connection"],
	"ActionMatiere"=>["PHP/VIEW/","ActionMatiere","connection"],
	"ActionNote"=>["PHP/VIEW/","ActionNote","connection"],


	
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