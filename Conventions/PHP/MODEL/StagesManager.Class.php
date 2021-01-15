<?php

class StagesManager 
{
	public static function add(Stages $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Stages (etape,dateVisite,nomVisiteur,lieuRealisation,deplacement,frequenceDeplacement,modeDeplacement,attFormReglement,libelleAttFormReg,visiteMedical,travauxDang,dateDeclarationDerog,sujetStage,travauxRealises,objectifPAE,dateDebut,dateFin,idTuteur,idStagiaire) VALUES (:etape,:dateVisite,:nomVisiteur,:lieuRealisation,:deplacement,:frequenceDeplacement,:modeDeplacement,:attFormReglement,:libelleAttFormReg,:visiteMedical,:travauxDang,:dateDeclarationDerog,:sujetStage,:travauxRealises,:objectifPAE,:dateDebut,:dateFin,:idTuteur,:idStagiaire)");
		$q->bindValue(":etape", $obj->getEtape());
		$q->bindValue(":dateVisite", $obj->getDateVisite());
		$q->bindValue(":nomVisiteur", $obj->getNomVisiteur());
		$q->bindValue(":lieuRealisation", $obj->getLieuRealisation());
		$q->bindValue(":deplacement", $obj->getDeplacement());
		$q->bindValue(":frequenceDeplacement", $obj->getFrequenceDeplacement());
		$q->bindValue(":modeDeplacement", $obj->getModeDeplacement());
		$q->bindValue(":attFormReglement", $obj->getAttFormReglement());
		$q->bindValue(":libelleAttFormReg", $obj->getLibelleAttFormReg());
		$q->bindValue(":visiteMedical", $obj->getVisiteMedical());
		$q->bindValue(":travauxDang", $obj->getTravauxDang());
		$q->bindValue(":dateDeclarationDerog", $obj->getDateDeclarationDerog());
		$q->bindValue(":sujetStage", $obj->getSujetStage());
		$q->bindValue(":travauxRealises", $obj->getTravauxRealises());
		$q->bindValue(":objectifPAE", $obj->getObjectifPAE());
		$q->bindValue(":dateDebut", $obj->getDateDebut());
		$q->bindValue(":dateFin", $obj->getDateFin());
		$q->bindValue(":idTuteur", $obj->getIdTuteur());
		$q->bindValue(":idStagiaire", $obj->getIdStagiaire());
		$q->execute();
	}

	public static function update(Stages $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Stages SET idStage=:idStage,etape=:etape,dateVisite=:dateVisite,nomVisiteur=:nomVisiteur,lieuRealisation=:lieuRealisation,deplacement=:deplacement,frequenceDeplacement=:frequenceDeplacement,modeDeplacement=:modeDeplacement,attFormReglement=:attFormReglement,libelleAttFormReg=:libelleAttFormReg,visiteMedical=:visiteMedical,travauxDang=:travauxDang,dateDeclarationDerog=:dateDeclarationDerog,sujetStage=:sujetStage,travauxRealises=:travauxRealises,objectifPAE=:objectifPAE,dateDebut=:dateDebut,dateFin=:dateFin,idTuteur=:idTuteur,idStagiaire=:idStagiaire WHERE idStage=:idStage");
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":etape", $obj->getEtape());
		$q->bindValue(":dateVisite", $obj->getDateVisite());
		$q->bindValue(":nomVisiteur", $obj->getNomVisiteur());
		$q->bindValue(":lieuRealisation", $obj->getLieuRealisation());
		$q->bindValue(":deplacement", $obj->getDeplacement());
		$q->bindValue(":frequenceDeplacement", $obj->getFrequenceDeplacement());
		$q->bindValue(":modeDeplacement", $obj->getModeDeplacement());
		$q->bindValue(":attFormReglement", $obj->getAttFormReglement());
		$q->bindValue(":libelleAttFormReg", $obj->getLibelleAttFormReg());
		$q->bindValue(":visiteMedical", $obj->getVisiteMedical());
		$q->bindValue(":travauxDang", $obj->getTravauxDang());
		$q->bindValue(":dateDeclarationDerog", $obj->getDateDeclarationDerog());
		$q->bindValue(":sujetStage", $obj->getSujetStage());
		$q->bindValue(":travauxRealises", $obj->getTravauxRealises());
		$q->bindValue(":objectifPAE", $obj->getObjectifPAE());
		$q->bindValue(":dateDebut", $obj->getDateDebut());
		$q->bindValue(":dateFin", $obj->getDateFin());
		$q->bindValue(":idTuteur", $obj->getIdTuteur());
		$q->bindValue(":idStagiaire", $obj->getIdStagiaire());
		$q->execute();
	}
	public static function delete(Stages $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Stages WHERE idStage=" .$obj->getIdStage());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Stages WHERE idStage =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Stages($results);
		}
		else
		{
			return false;
		}
	}
	public static function getList()
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM Stages");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Stages($donnees);
			}
		}
		return $liste;
	}
	
	public static function getByIdStagiaire($idStagiaire)
    {
        $db = DbConnect::getDb();
        $id = (int) $idStagiaire;
        $liste = [];
        $q = $db->query("SELECT * FROM Stages where idStagiaire=$id");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new Stages($donnees);
            }
        }return $liste;

	}
	public static function getByIdTuteur($idTuteur)
    {
        $db = DbConnect::getDb();
        $id = (int) $idTuteur;
        $liste = [];
        $q = $db->query("SELECT * FROM Stages where idTuteur=$id");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new Stages($donnees);
            }
        }return $liste;

	}
}