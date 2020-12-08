<?php

require("./Outils.php");

Parametres::init();

DbConnect::init();

session_start();

// /******Les langues******/
// /***On récupère la langue***/
// if (isset($_GET['lang']))
// {
// 	$_SESSION['lang'] = $_GET['lang'];
// }

// /***On récupère la langue de la session/FR par défaut***/
// $lang=isset($_SESSION['lang']) ? $_SESSION['lang'] : 'FR';
// /******Fin des langues******/

$routes=[
	"default"=>["PHP/VIEW/","accueil","Accueil"],
	// "TestclientsManager"=>["PHP/MODEL/TESTMANAGER/","TestclientsManager","Test de clients"],
	// "TestproduitsManager"=>["PHP/MODEL/TESTMANAGER/","TestproduitsManager","Test de produits"],
	// "TestrepresentantsManager"=>["PHP/MODEL/TESTMANAGER/","TestrepresentantsManager","Test de representants"],
	// "TestrolesManager"=>["PHP/MODEL/TESTMANAGER/","TestrolesManager","Test de roles"],
	// "TestuserManager"=>["PHP/MODEL/TESTMANAGER/","TestuserManager","Test de user"],
	// "TestventesManager"=>["PHP/MODEL/TESTMANAGER/","TestventesManager","Test de ventes"],

	"ListeProduit"=>["PHP/VIEW/","ListeProduit","Liste des Produits"],
	"ListeRepresentant"=>["PHP/VIEW/","ListeRepresentant","Liste des representant"],
	"ListeVente"=>["PHP/VIEW/","ListeVente","Liste des ventes"],
	"ListeClient"=>["PHP/VIEW/","ListeClient","Liste des clients"],

	"FormConnect"=>["PHP/VIEW/","FormConnect","Formulaire de connection"],
	"FormInscript"=>["PHP/VIEW/","FormInscript","Formulaire d'inscription"],
	"FormRepresentant"=>["PHP/VIEW/","FormRepresentant","Formulaire d'inscription"],
	"FormClient"=>["PHP/VIEW/","FormClient","Formulaire d'inscription"],
	"FormVente"=>["PHP/VIEW/","FormVente","Formulaire d'inscription"],
	"FormProduit"=>["PHP/VIEW/","FormProduit","Formulaire d'inscription"],



	"ActionConnect"=>["PHP/VIEW/","ActionConnect","Traitement de la connection"],
	"ActionRepresentant"=>["PHP/VIEW/","ActionRepresentant","Traitement de la connection"],
	"ActionVente"=>["PHP/VIEW/","ActionVente","Traitement de la connection"],
	"ActionClient"=>["PHP/VIEW/","ActionClient","Traitement de la connection"],
	"ActionProduit"=>["PHP/VIEW/","ActionProduit","Traitement de la connection"],






];

if(isset($_GET["p"]))
{

	$page=$_GET["p"];

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