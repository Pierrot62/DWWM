<?php

$hotel = new Hotels($_POST);
$mode = $_GET['mode'];
var_dump($hotel);
switch ($mode)
{
    case "ajout":
    {
            HotelsManager::add($hotel);
            break;
        }
    case "modif":
            {
            HotelsManager::update($hotel);
            break;
        }
    case "delete":
            {
            HotelsManager::delete($hotel);
            break;
        }
}

header("location: index.php?codePage=listeHotel");