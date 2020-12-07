<?php

$annonce = new Annonces($_POST);

$mode = $_GET['mode'];

switch ($mode) {
    case "ajout":
        {
            if (!empty($_FILES)) {
                $img = $_FILES['lienImg'];
                move_uploaded_file($img['tmp_name'], "./IMG/imgAnnonce/" . $img['name']);
                $lienImg = './IMG/imgAnnonce/' . $img['name'];
                $annonce->setlienImg($lienImg);
            }
            AnnoncesManager::add($annonce);
            break;
        }
    case "modif":
        {
            if (!empty($_FILES)) {
                $img = $_FILES['lienImg'];
                move_uploaded_file($img['tmp_name'], "./IMG/imgAnnonce/" . $img['name']);
                $lienImg = './IMG/imgAnnonce/' . $img['name'];
                $annonce->setlienImg($lienImg);
            }

            AnnoncesManager::update($annonce);
            break;
        }
    case "delete":
        {
            AnnoncesManager::delete($annonce);
            break;
        }
}

header("location: index.php?page=accueil");
