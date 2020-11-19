<?php

include ("./head.php");

$idProduits = $_GET["id"];
var_dump ($idProduits);

// on teste la suppression
echo "on supprime un article" . '<br>';
$pSuppr = ProduitsManager::findById($idProduits);
ProduitsManager::delete($pSuppr);

header('Location: ../../index.php');
