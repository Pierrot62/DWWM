<?php
include ("head.php");
 
//TRAITEMENT  DU FORMULAIRE//
$prix=intval($_GET['prix']);
$produit=new Produits(["libelleProduit"=>$_GET["libelleProduit"],"prix"=>$prix,"dateDePeremption"=>$_GET["dateDePeremption"]]);
ProduitsManager::add($produit);

header("location: ../../index.php");
