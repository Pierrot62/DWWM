<?php

$mode = $_GET['mode'];
 var_dump($_POST);
$formation = new Formations($_POST);


switch($mode)
{
    case "ajouter":
    {
        //on ajoute une formation
        FormationsManager::add($formation);
        //on met à jour la table animation
        $formation = FormationsManager::getByLibelle($formation->getLibelleFormation());
        // var_dump($formation);
        $animation = new Animations(["idUtilisateur"=>$_POST["idUtilisateur"], "idFormation"=>$formation->getIdFormation()]);
        AnimationsManager::add($animation);
        break;
    }
    case "modifier":
    {
        $idAncienUtilisateur = UtilisateursManager::findById($_POST['idAncienUtilisateur']);
        var_dump($idAncienUtilisateur);
        if($_POST['idUtilisateur'] != $_POST['idAncienUtilisateur'])
        {
            $anim= AnimationsManager::getByUtilisateurFormation($_POST['idAncienUtilisateur'], $formation->getIdFormation());

            AnimationsManager::delete($anim);
            $anim =new Animations(["idFormation"=> $formation->getIdFormation(), "idUtilisateur"=> $_POST['idUtilisateur']]);
            AnimationsManager::add($anim);
        }
        FormationsManager::update($formation);
        break;
    }
    case "supprimer":
    {
        $anim= AnimationsManager::getByUtilisateurFormation($_POST['idAncienUtilisateur'], $formation->getIdFormation());
        AnimationsManager::delete($anim);
        FormationsManager::delete($formation);
        break;
    }
}
//header("location:Index.php?page=ListeFormations");
