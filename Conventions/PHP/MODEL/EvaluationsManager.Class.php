<?php

class EvaluationsManager 
{
	public static function add(Evaluations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Evaluations (dateEvaluation,objectifAcquisition,comportementMt,satisfactionEnt,remarqueEnt,perspectiveEmb) VALUES (:dateEvaluation,:objectifAcquisition,:comportementMt,:satisfactionEnt,:remarqueEnt,:perspectiveEmb)");
		$q->bindValue(":dateEvaluation", $obj->getDateEvaluation());
		$q->bindValue(":objectifAcquisition", $obj->getObjectifAcquisition());
		$q->bindValue(":comportementMt", $obj->getComportementMt());
		$q->bindValue(":satisfactionEnt", $obj->getSatisfactionEnt());
		$q->bindValue(":remarqueEnt", $obj->getRemarqueEnt());
		$q->bindValue(":perspectiveEmb", $obj->getPerspectiveEmb());
		$q->execute();
	}

	public static function update(Evaluations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Evaluations SET idStage=:idStage,dateEvaluation=:dateEvaluation,objectifAcquisition=:objectifAcquisition,comportementMt=:comportementMt,satisfactionEnt=:satisfactionEnt,remarqueEnt=:remarqueEnt,perspectiveEmb=:perspectiveEmb WHERE idStage=:idStage");
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":dateEvaluation", $obj->getDateEvaluation());
		$q->bindValue(":objectifAcquisition", $obj->getObjectifAcquisition());
		$q->bindValue(":comportementMt", $obj->getComportementMt());
		$q->bindValue(":satisfactionEnt", $obj->getSatisfactionEnt());
		$q->bindValue(":remarqueEnt", $obj->getRemarqueEnt());
		$q->bindValue(":perspectiveEmb", $obj->getPerspectiveEmb());
		$q->execute();
	}
	public static function delete(Evaluations $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Evaluations WHERE idStage=" .$obj->getIdStage());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Evaluations WHERE idStage =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Evaluations($results);
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
		$q = $db->query("SELECT * FROM Evaluations");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Evaluations($donnees);
			}
		}
		return $liste;
	}
}