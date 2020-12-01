<?php

echo '
<section>
<div></div>
';

$idProduits = $_GET["id"];

$pSuppr = ProduitsManager::findById($idProduits);
ProduitsManager::delete($pSuppr);

header("location:index.php?code=default");
