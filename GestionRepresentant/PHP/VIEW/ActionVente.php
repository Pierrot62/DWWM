<?php

$vente = new Ventes($_POST);

$mode = $_GET['mode'];

switch ($mode) {
    case "add":
        {
            VentesManager::add($vente);
            break;
        }
    case "update":
        {

            VentesManager::update($vente);
            break;
        }
    case "delete":
        {
            VentesManager::delete($vente);
            break;
        }
}

header("location: index.php?page=ListeVente");
