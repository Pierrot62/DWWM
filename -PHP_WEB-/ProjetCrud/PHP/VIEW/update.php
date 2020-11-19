<?php

include ("./head.php");

$idProduits = $_GET["id"];

$p = ClientsManager::findById($idProduits);
var_dump($p);



// on teste la mise à jour

// $p->setNomClient($p->getNomClient() . 'sss');
// ClientsManager::update($p);
// $pRecharge = ClientsManager::findById(1);
// var_dump($pRecharge);

