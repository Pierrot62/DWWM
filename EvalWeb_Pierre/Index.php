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
	"TestelevesManager"=>["PHP/MODEL/TESTMANAGER/","TestelevesManager","Test de eleves"],
	"TestmatieresManager"=>["PHP/MODEL/TESTMANAGER/","TestmatieresManager","Test de matieres"],
	"TestsuivisManager"=>["PHP/MODEL/TESTMANAGER/","TestsuivisManager","Test de suivis"],
	"TestutilisateurManager"=>["PHP/MODEL/TESTMANAGER/","TestutilisateurManager","Test de utilisateur"],

	"FormConnect"=>["PHP/VIEW/","FormConnect","Connection"],
	"FormEleve"=>["PHP/VIEW/","FormEleve","Ajouter un eleve"],
	"FormNote"=>["PHP/VIEW/","FormNote","Ajouter un note"],
	"FormEnseignant"=>["PHP/VIEW/","FormEnseignant","Ajouter un enseignant"],
	"FormMatiere"=>["PHP/VIEW/","FormMatiere","Ajouter un enseignant"],



	"ListEleves"=>["PHP/VIEW/","ListEleves","List des eleves"],
	"ListNote"=>["PHP/VIEW/","ListNote","List des note"],
	"ListEnseignant"=>["PHP/VIEW/","ListEnseignant","List des Enseignant"],
	"ListMatiere"=>["PHP/VIEW/","ListMatiere","List des Enseignant"],

	"ActionConnect"=>["PHP/VIEW/","ActionConnect","connection"],
	
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