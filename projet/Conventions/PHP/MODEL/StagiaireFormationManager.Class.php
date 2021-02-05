<?php

class StagiaireFormationManager
{
    public static function add(StagiaireFormation $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO StagiaireFormation (libelleFormation,idSessionFormation,numOffreFormation,idPeriode,dateDebutPAE,dateFinPAE,dateRapportSuivi,objectifPAE,idParticipation,dateDebut,dateFin,idStagiaire,genreStagiaire,nomStagiaire,prenomStagiaire,numSecuStagiaire,numBenefStagiaire,dateNaissanceStagiaire,emailStagiaire) VALUES (:libelleFormation,:idSessionFormation,:numOffreFormation,:idPeriode,:dateDebutPAE,:dateFinPAE,:dateRapportSuivi,:objectifPAE,:idParticipation,:dateDebut,:dateFin,:idStagiaire,:genreStagiaire,:nomStagiaire,:prenomStagiaire,:numSecuStagiaire,:numBenefStagiaire,:dateNaissanceStagiaire,:emailStagiaire)");
        $q->bindValue(":libelleFormation", $obj->getLibelleFormation());
        $q->bindValue(":idSessionFormation", $obj->getIdSessionFormation());
        $q->bindValue(":numOffreFormation", $obj->getNumOffreFormation());
        $q->bindValue(":idPeriode", $obj->getIdPeriode());
        $q->bindValue(":dateDebutPAE", $obj->getDateDebutPAE());
        $q->bindValue(":dateFinPAE", $obj->getDateFinPAE());
        $q->bindValue(":dateRapportSuivi", $obj->getDateRapportSuivi());
        $q->bindValue(":objectifPAE", $obj->getObjectifPAE());
        $q->bindValue(":idParticipation", $obj->getIdParticipation());
        $q->bindValue(":dateDebut", $obj->getDateDebut());
        $q->bindValue(":dateFin", $obj->getDateFin());
        $q->bindValue(":idStagiaire", $obj->getIdStagiaire());
        $q->bindValue(":genreStagiaire", $obj->getGenreStagiaire());
        $q->bindValue(":nomStagiaire", $obj->getNomStagiaire());
        $q->bindValue(":prenomStagiaire", $obj->getPrenomStagiaire());
        $q->bindValue(":numSecuStagiaire", $obj->getNumSecuStagiaire());
        $q->bindValue(":numBenefStagiaire", $obj->getNumBenefStagiaire());
        $q->bindValue(":dateNaissanceStagiaire", $obj->getDateNaissanceStagiaire());
        $q->bindValue(":emailStagiaire", $obj->getEmailStagiaire());
        $q->execute();
    }

    public static function update(StagiaireFormation $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE StagiaireFormation SET idFormation=:idFormation,libelleFormation=:libelleFormation,idSessionFormation=:idSessionFormation,numOffreFormation=:numOffreFormation,idPeriode=:idPeriode,dateDebutPAE=:dateDebutPAE,dateFinPAE=:dateFinPAE,dateRapportSuivi=:dateRapportSuivi,objectifPAE=:objectifPAE,idParticipation=:idParticipation,dateDebut=:dateDebut,dateFin=:dateFin,idStagiaire=:idStagiaire,genreStagiaire=:genreStagiaire,nomStagiaire=:nomStagiaire,prenomStagiaire=:prenomStagiaire,numSecuStagiaire=:numSecuStagiaire,numBenefStagiaire=:numBenefStagiaire,dateNaissanceStagiaire=:dateNaissanceStagiaire,emailStagiaire=:emailStagiaire WHERE idFormation=:idFormation");
        $q->bindValue(":idFormation", $obj->getIdFormation());
        $q->bindValue(":libelleFormation", $obj->getLibelleFormation());
        $q->bindValue(":idSessionFormation", $obj->getIdSessionFormation());
        $q->bindValue(":numOffreFormation", $obj->getNumOffreFormation());
        $q->bindValue(":idPeriode", $obj->getIdPeriode());
        $q->bindValue(":dateDebutPAE", $obj->getDateDebutPAE());
        $q->bindValue(":dateFinPAE", $obj->getDateFinPAE());
        $q->bindValue(":dateRapportSuivi", $obj->getDateRapportSuivi());
        $q->bindValue(":objectifPAE", $obj->getObjectifPAE());
        $q->bindValue(":idParticipation", $obj->getIdParticipation());
        $q->bindValue(":dateDebut", $obj->getDateDebut());
        $q->bindValue(":dateFin", $obj->getDateFin());
        $q->bindValue(":idStagiaire", $obj->getIdStagiaire());
        $q->bindValue(":genreStagiaire", $obj->getGenreStagiaire());
        $q->bindValue(":nomStagiaire", $obj->getNomStagiaire());
        $q->bindValue(":prenomStagiaire", $obj->getPrenomStagiaire());
        $q->bindValue(":numSecuStagiaire", $obj->getNumSecuStagiaire());
        $q->bindValue(":numBenefStagiaire", $obj->getNumBenefStagiaire());
        $q->bindValue(":dateNaissanceStagiaire", $obj->getDateNaissanceStagiaire());
        $q->bindValue(":emailStagiaire", $obj->getEmailStagiaire());
        $q->execute();
    }
    public static function delete(StagiaireFormation $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM StagiaireFormation WHERE idFormation=" . $obj->getIdFormation());
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM StagiaireFormation");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new StagiaireFormation($donnees);
            }
        }
        return $liste;
    }
    public static function getListByStagiaire($idStagiaire)
    {
        $idStagiaire = (int) $idStagiaire;
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM StagiaireFormation where idStagiaire = " . $idStagiaire);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new StagiaireFormation($donnees);
            }
        }
        return $liste;
    }
    public static function getListBySession($idSession,$api)
    {
        $idSession = (int) $idSession;
        $db = DbConnect::getDb();
        $liste = [];
        $json = [];
        $q = $db->query("SELECT DISTINCT idStagiaire FROM StagiaireFormation where idSessionFormation = " . $idSession);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = StagiairesManager::findById($donnees['idStagiaire']);
                $json[]=$donnees;
            }
        }
        if(!$api)return $liste;
        return $json;
    }
    public static function nbPeriodesStages($idStagiaire, $idSessionFormation)
    {
        $db = DbConnect::getDb();
        $liste = [];

        if ($idSessionFormation == null)
        {
            $idStagiaire = (int) $idStagiaire;
            $q = $db->query("SELECT DISTINCT idPeriode FROM StagiaireFormation WHERE idStagiaire = " . $idStagiaire);
        }
        else if ($idStagiaire == null)
        {
            $idSessionFormation = (int) $idSessionFormation;
            $q = $db->query("SELECT DISTINCT idPeriode FROM StagiaireFormation WHERE idSessionFormation = " . $idSessionFormation);
        }
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = $donnees;
            }
        }
        return count($liste);
    }
    
    public static function getPeriodeBySession($idSessionFormation)
    {
        $db = DbConnect::getDb();
        $liste = [];
        $idSessionFormation = (int) $idSessionFormation;
        $q = $db->query("SELECT DISTINCT idPeriode FROM StagiaireFormation WHERE idSessionFormation = ".$idSessionFormation." ORDER BY dateDebutPAE" );
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = PeriodesStagesManager::findById($donnees['idPeriode']);
            }
        }
        return $liste;
    }
}
