<?php

class ValeurtravauxdangereuxManager 
{
	public static function add(Valeurtravauxdangereux $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Valeurtravauxdangereux (idStage,idLibelleTravauxDangereux,valeurTravaux) VALUES (:idStage,:idLibelleTravauxDangereux,:valeurTravaux)");
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":idLibelleTravauxDangereux", $obj->getIdLibelleTravauxDangereux());
		$q->bindValue(":valeurTravaux", $obj->getValeurTravaux());
		$q->execute();
	}

	public static function update(Valeurtravauxdangereux $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Valeurtravauxdangereux SET idTravauxDangereux=:idTravauxDangereux,idStage=:idStage,idLibelleTravauxDangereux=:idLibelleTravauxDangereux,valeurTravaux=:valeurTravaux WHERE idTravauxDangereux=:idTravauxDangereux");
		$q->bindValue(":idTravauxDangereux", $obj->getIdTravauxDangereux());
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":idLibelleTravauxDangereux", $obj->getIdLibelleTravauxDangereux());
		$q->bindValue(":valeurTravaux", $obj->getValeurTravaux());
		$q->execute();
	}
	public static function delete(Valeurtravauxdangereux $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Valeurtravauxdangereux WHERE idTravauxDangereux=" .$obj->getIdTravauxDangereux());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Valeurtravauxdangereux WHERE idTravauxDangereux =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Valeurtravauxdangereux($results);
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
		$q = $db->query("SELECT * FROM Valeurtravauxdangereux");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Valeurtravauxdangereux($donnees);
			}
		}
		return $liste;
	}
}