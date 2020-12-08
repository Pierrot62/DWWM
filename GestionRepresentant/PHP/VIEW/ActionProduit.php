<?php

$produit = new Produits($_POST);
$mode = $_GET['mode'];

switch ($mode) {
    case "add":
        {
            ProduitsManager::add($produit);
            break;
        }
    case "update":
        {
            ProduitsManager::update($produit);
            break;
        }
    case "delete":
        {   
            ProduitsManager::delete($produit);
            break;
        }
}

header("location: index.php?p=accueil");
