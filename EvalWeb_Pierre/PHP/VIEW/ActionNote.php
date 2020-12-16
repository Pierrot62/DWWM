<?php
$note=SuivisManager::findById($_POST['id']);

switch($_GET['mode'])
{
    // Création d'un compte
    case ("new"): 
        if($note==FALSE)
        {
            $note=new Suivis($_POST);
            SuivisManager::add($note);
            header("location: index.php?page=ListNote");

            
        }
        else{
            echo '<h2 class="rouge">Le pseudo existe déjà, veuillez en saisir un autre</h2>';
            header("refresh:3;url=index.php?page=formconnect");
        }
    break;

    //modification

    case ("update"):
        $note=new Suivis($_POST);
        var_dump ($note);
        SuivisManager::update($note);
        header("Location:index.php?page=ListNote");

    break;

    //Supprimer

    case "delete":
        {
            $test = new Suivis($_POST);
            var_dump($test);
            SuivisManager::delete($test);
            // header("Location:index.php?page=ListNote");

            break;
        }
}