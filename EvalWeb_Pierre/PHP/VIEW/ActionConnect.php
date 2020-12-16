<?php
var_dump($_POST['login']);
$utilisateur=UtilisateurManager::findByPseudo($_POST['login']);

switch($_GET['mode'])
{
    // Création d'un compte
    case ("new"): 
        if($utilisateur==FALSE)
        {
            if($_POST['mdpUtilisateur']==$_POST['confirmation'])
            {
                $_POST['mdpUtilisateur']=crypte($_POST['motDePasse']);
                $utilisateur=new Utilisateur($_POST);
                UtilisateurManager::add($utilisateur);
                header("Location:index.php?page=formConnect");
            }
            else{
                echo '<h2 class="rouge">La confirmation ne correspond pas au mot de passe</h2>';
                header("refresh:3;url=index.php?page=formConnect");
            }
        }
        else{
            echo '<h2 class="rouge">Le pseudo existe déjà, veuillez en saisir un autre</h2>';
            header("refresh:3;url=index.php?page=formconnect");
        }
    break;

    // Connexion à un compte
    case ("connect"):
        if ($utilisateur!=FALSE)
        {
            if ($utilisateur->getMotDePasse()==$_POST['motDePasse'])
            {
                $_SESSION['utilisateur']=$utilisateur;
                echo '<h2 class="rouge">Le mot de passe est invalide</h2>';
                header("Location:index.php?page=accueil");
            }
            else{
                echo '<h2 class="rouge">Le mot de passe est invalide</h2>';
                header("refresh:30;url=index.php?page=formConnect");
            }
        }
        else
        {
            echo '<h2 class="rouge">Le pseudo n\'existe pas</h2>';
            header("refresh:30;url=index.php?page=formConnect");
        }
    break;

    //deconnexion
    case ("disconnect"):
        session_destroy();
        header("Location:index.php?page=accueil");
    break;
    //modification

    case ("update"):
        $utilisateur=new Utilisateurs($_POST);
        var_dump ($utilisateur);
        UtilisateursManager::update($utilisateur);
        header("Location:index.php?page=listeUtilisateur");

    break;
}