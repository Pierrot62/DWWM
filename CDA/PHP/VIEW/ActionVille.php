<?php

$ville = new Ville($_POST);
var_dump($_POST);
var_dump($ville);
$mode = $_GET['mode'];
VilleManager::update($ville);


header("location: index.php?codePage=listeVille");