<?php

$eleves=ElevesManager::findById($_POST['id']);

var_dump($_POST);

switch($_GET['mode'])
{
    // Création d'un compte
    case ("new"): 
        if($eleves==FALSE)
        {
            $eleves=new Eleves($_POST);
            ElevesManager::add($eleves);
            header("location: index.php?page=ListEleve");

            
        }
        else{
            echo '<h2 class="rouge">Le pseudo existe déjà, veuillez en saisir un autre</h2>';
            header("refresh:3;url=index.php?page=formconnect");
        }
    break;

    //modification

    case ("update"):
        $eleves=new Eleves($_POST);
        var_dump ($eleves);
        ElevesManager::update($eleves);
        header("Location:index.php?page=ListEnseignant");

    break;

    //Supprimer

    case "delete":
        {
            // $id = $_GET["id"];
            // $pseudo = $_GET["speudo"];
            var_dump($eleves);
            ElevesManager::delete($eleves);
            break;
        }
}