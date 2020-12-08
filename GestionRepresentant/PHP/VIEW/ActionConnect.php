<?php
$utilisateur=UserManager::findByPseudo($_POST['pseudoUser']);
switch($_GET['mode'])
{
    // Création d'un compte
    case ("new"): 
        if($utilisateur==FALSE)
        {
            if($_POST['mdpUser']==$_POST['confirmation'])
            {
                $_POST['mdpUser']=crypte($_POST['mdpUser']);
                $utilisateur=new User($_POST);
                var_dump($utilisateur);
                UserManager::add($utilisateur);
                header("Location:index.php?p=FormConnect");
            }
            else{
                echo '<h2 class="rouge">La confirmation ne correspond pas au mot de passe</h2>';
                header("refresh:3;url=index.php?p=formConnect");
            }
        }
        else{
            echo '<h2 class="rouge">Le pseudo existe déjà, veuillez en saisir un autre</h2>';
            header("refresh:3;url=index.php?p=formconnect");
        }
    break;

    // Connexion à un compte
    case ("connect"):
        if ($utilisateur!=FALSE)
        {
            if ($utilisateur->getMdpUser()==crypte($_POST['mdpUser']))
            {
                $_SESSION['utilisateur']=$utilisateur;
                header("Location:index.php?p=accueil");
            }
            else{
                echo '<h2 class="rouge">Le mot de passe est invalide</h2>';
                header("refresh:30;url=index.php?p=formConnect");
            }
        }
        else
        {
            echo '<h2 class="rouge">Le pseudo n\'existe pas</h2>';
            header("refresh:30;url=index.php?p=formConnect");
        }
    break;

    //deconnexion
    case ("disconnect"):
        session_destroy();
        header("Location:index.php?p=Accueil");
    break;
    //modification

    case ("update"):
        $utilisateur=new User($_POST);
        var_dump ($utilisateur);
        UserManager::update($utilisateur);
        header("Location:index.php?p=ListeUtilisateur");

    break;
}