<?php

$mode = $_GET['mode'];

$stagiaire = new Stagiaires($_POST);
 var_dump($_POST);
//recherche des info Sesssions
$sess = SessionsFormationsManager::findById($_POST["idSessionFormation"]);

switch ($mode)
{
    case "ajouter":
            {
            //maj table stagiaires
            StagiairesManager::add($stagiaire);
            //on recupere l'id du stagiaire créé
            $stagiaire = StagiairesManager::getByEmail($stagiaire->getEmailStagiaire());
            //maj table participations
            $part = new Participations(["idSessionFormation" => $_POST["idSessionFormation"], "idStagiaire" => $stagiaire->getIdStagiaire()]);
            ParticipationsManager::add($part);
            //maj table utilisateurs
            creerUtilisateur($stagiaire, $sess);

            break;
        }
    case "modifier":
            { // on recupere les anciennes infos
            $stagiaireOld = StagiairesManager::findById($_POST['idStagiaire']);
            // si changement @mail, changement dans table utilisateur
            if ($stagiaire->getEmailStagiaire() != $stagiaireOld->getEmailStagiaire())
        {
                //on supprime l'ancien utilisateur
                UtilisateursManager::delete(UtilisateursManager::getByEmail($stagiaireOld->getEmailStagiaire()));
                //on crée le nouveau
                creerUtilisateur($stagiaire, $sess);
            }
        else
        { // changement nom et prenom dans table utilisateur
                $uti = UtilisateursManager::getByEmail($stagiaire->getEmailStagiaire());
                $uti->setNomUtilisateur($stagiaire->getNomStagiaire());
                $uti->setPrenomUtilisateur($stagiaire->getPrenomStagiaire());
                UtilisateursManager::update($uti);
            }

            // gestion table participation
            if ($_POST['idAncienneSession'] != $_POST['idSessionFormation'])
        {
                //supprimer l'ancienne participation
                $part = ParticipationsManager::getBySessionStagiaire($_POST['idAncienneSession'], $stagiaire->getIdStagiaire());
                ParticipationsManager::delete($part);
                //creer une nouvelle participation
                $part = new Participations(["idSessionFormation" => $_POST["idSessionFormation"], "idStagiaire" => $stagiaire->getIdStagiaire()]);
                ParticipationsManager::add($part);
            }
            StagiairesManager::update($stagiaire);
            break;
        }
    case "supprimer":
            {
            StagiairesManager::delete($stagiaire);
            break;
        }

}

header("location:index.php?page=ListeStagiaires");

function creerUtilisateur($stagiaire, $sess)
{
    $utilisateur = new Utilisateurs();
    $utilisateur->setNomUtilisateur($stagiaire->getNomStagiaire());
    $utilisateur->setPrenomUtilisateur($stagiaire->getPrenomStagiaire());
    $utilisateur->setEmailUtilisateur($stagiaire->getEmailStagiaire());
    $utilisateur->setIdRole(4);
    $utilisateur->setMdpUtilisateur($stagiaire->getPrenomStagiaire() . $stagiaire->getNomStagiaire() . $stagiaire->getNumBenefStagiaire());
    $date = date_create_from_format("Y-m-d", $sess->getDateFin());
    $newdate = date_add($date, date_interval_create_from_date_string("15 days"));
    $utilisateur->setDatePeremption($newdate->format("Y-m-d"));
    UtilisateursManager::add($utilisateur);
}
