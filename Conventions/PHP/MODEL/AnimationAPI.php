<?php

$type = $_POST["type"];
$id = $_POST["id"];
if ($type == "formation") {
    echo json_encode(AnimationManager::getByFormation($id));
} else {
    echo json_encode(AnimationManager::getByUtilisateur($id));
}

// var_dump($listeDepartement);
