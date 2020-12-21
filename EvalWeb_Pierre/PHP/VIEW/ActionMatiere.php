<?php

$matiere=MatieresManager::findById($_POST['id']);


switch($_GET['mode'])
{
    // Création d'un compte
    case ("new"): 
        if($matiere==FALSE)
        {
            $matiere=new Matieres($_POST);
            MatieresManager::add($matiere);
            header("location: index.php?page=ListMatiere");

            
        }
        else{
            echo '<h2 class="rouge">Le pseudo existe déjà, veuillez en saisir un autre</h2>';
            header("refresh:3;url=index.php?page=ListMatiere");
        }
    break;

    //modification

    case ("update"):
        $matiere=new Matieres($_POST);
        MatieresManager::update($matiere);
        header("Location:index.php?page=ListMatiere");

    break;

    //Supprimer

    case "delete":
        {
            // $id = $_GET["id"];
            // $pseudo = $_GET["speudo"];
            var_dump($matiere);
            MatieresManager::delete($matiere);
            break;
        }
}