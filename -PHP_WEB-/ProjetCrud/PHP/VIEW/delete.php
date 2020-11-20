<?php

include ("./head.php");
include ("head.php");
echo '
<section>
<div><a class="new" href="PHP/VIEW/add.php">Ajouter un produit</a></div>
<div></div>
';

$idProduits = $_GET["id"];

$pSuppr = ProduitsManager::findById($idProduits);
ProduitsManager::delete($pSuppr);

header('Location: ../../index.php');