<?php

include ("./head.php");

$idProduits = $_GET["id"];

$pSuppr = ProduitsManager::findById($idProduits);
ProduitsManager::delete($pSuppr);

header('Location: ../../index.php');