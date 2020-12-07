<?php

$client = new Clients($_POST);

$mode = $_GET['mode'];

switch ($mode) {
    case "add":
        {
            ClientsManager::add($client);
            break;
        }
    case "update":
        {
            ClientsManager::update($client);
            break;
        }
    case "delete":
        {
            ClientsManager::delete($client);
            break;
        }
}

header("location: index.php?page=accueil");
