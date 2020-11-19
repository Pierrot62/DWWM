<?php

include ("head.php");
 

//TRAITEMENT  DU FORMULAIRE//
$prix=intval($_GET['prix']);
$id=intval($_GET["IdProduit"]);
$produit=ProduitsManager::findById($id);
$produit->setLibelleProduit($_GET['libelleProduit']);
$produit->setPrix($_GET['prix']);
$produit->setDateDePeremption($_GET['dateDePeremption']);
ProduitsManager::update($produit);


header("location: ../../index.php");
