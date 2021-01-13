<?php

class StagesManager 
{
	public static function add(Stages $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Stages (dateVisite,nomVisiteur,lieuRealisation,deplacement,frequenceDeplacement,modeDeplacement,attFormReglement,libelleAttFormReg,visiteMedical,travauxDang,dateDeclarationDerog,sujetStage,travauxRealises,satisfactionEnt,remarqueEnt,perspectiveEmb,repTravauxDang1,repTravauxDang2,repTravauxDang3,repTravauxDang4,repTravauxDang5,objectifPAE,repTravauxDang6,autreRepTravauxDang,dateDebut,dateFin,idTuteur,idStagiaire) VALUES (:dateVisite,:nomVisiteur,:lieuRealisation,:deplacement,:frequenceDeplacement,:modeDeplacement,:attFormReglement,:libelleAttFormReg,:visiteMedical,:travauxDang,:dateDeclarationDerog,:sujetStage,:travauxRealises,:satisfactionEnt,:remarqueEnt,:perspectiveEmb,:repTravauxDang1,:repTravauxDang2,:repTravauxDang3,:repTravauxDang4,:repTravauxDang5,:objectifPAE,:repTravauxDang6,:autreRepTravauxDang,:dateDebut,:dateFin,:idTuteur,:idStagiaire)");
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
		$q->bindValue(":satisfactionEnt", $obj->getSatisfactionEnt());
		$q->bindValue(":remarqueEnt", $obj->getRemarqueEnt());
		$q->bindValue(":perspectiveEmb", $obj->getPerspectiveEmb());
		$q->bindValue(":repTravauxDang1", $obj->getRepTravauxDang1());
		$q->bindValue(":repTravauxDang2", $obj->getRepTravauxDang2());
		$q->bindValue(":repTravauxDang3", $obj->getRepTravauxDang3());
		$q->bindValue(":repTravauxDang4", $obj->getRepTravauxDang4());
		$q->bindValue(":repTravauxDang5", $obj->getRepTravauxDang5());
		$q->bindValue(":objectifPAE", $obj->getObjectifPAE());
		$q->bindValue(":repTravauxDang6", $obj->getRepTravauxDang6());
		$q->bindValue(":autreRepTravauxDang", $obj->getAutreRepTravauxDang());
		$q->bindValue(":dateDebut", $obj->getDateDebut());
		$q->bindValue(":dateFin", $obj->getDateFin());
		$q->bindValue(":idTuteur", $obj->getIdTuteur());
		$q->bindValue(":idStagiaire", $obj->getIdStagiaire());
		$q->execute();
	}

	public static function update(Stages $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Stages SET idStage=:idStage,dateVisite=:dateVisite,nomVisiteur=:nomVisiteur,lieuRealisation=:lieuRealisation,deplacement=:deplacement,frequenceDeplacement=:frequenceDeplacement,modeDeplacement=:modeDeplacement,attFormReglement=:attFormReglement,libelleAttFormReg=:libelleAttFormReg,visiteMedical=:visiteMedical,travauxDang=:travauxDang,dateDeclarationDerog=:dateDeclarationDerog,sujetStage=:sujetStage,travauxRealises=:travauxRealises,satisfactionEnt=:satisfactionEnt,remarqueEnt=:remarqueEnt,perspectiveEmb=:perspectiveEmb,repTravauxDang1=:repTravauxDang1,repTravauxDang2=:repTravauxDang2,repTravauxDang3=:repTravauxDang3,repTravauxDang4=:repTravauxDang4,repTravauxDang5=:repTravauxDang5,objectifPAE=:objectifPAE,repTravauxDang6=:repTravauxDang6,autreRepTravauxDang=:autreRepTravauxDang,dateDebut=:dateDebut,dateFin=:dateFin,idTuteur=:idTuteur,idStagiaire=:idStagiaire WHERE idStage=:idStage");
		$q->bindValue(":idStage", $obj->getIdStage());
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
		$q->bindValue(":satisfactionEnt", $obj->getSatisfactionEnt());
		$q->bindValue(":remarqueEnt", $obj->getRemarqueEnt());
		$q->bindValue(":perspectiveEmb", $obj->getPerspectiveEmb());
		$q->bindValue(":repTravauxDang1", $obj->getRepTravauxDang1());
		$q->bindValue(":repTravauxDang2", $obj->getRepTravauxDang2());
		$q->bindValue(":repTravauxDang3", $obj->getRepTravauxDang3());
		$q->bindValue(":repTravauxDang4", $obj->getRepTravauxDang4());
		$q->bindValue(":repTravauxDang5", $obj->getRepTravauxDang5());
		$q->bindValue(":objectifPAE", $obj->getObjectifPAE());
		$q->bindValue(":repTravauxDang6", $obj->getRepTravauxDang6());
		$q->bindValue(":autreRepTravauxDang", $obj->getAutreRepTravauxDang());
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
}