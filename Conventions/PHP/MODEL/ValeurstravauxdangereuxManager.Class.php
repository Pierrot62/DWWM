<?php

class ValeurstravauxdangereuxManager 
{
	public static function add(Valeurstravauxdangereux $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Valeurstravauxdangereux (idStage,idLibelleTravauxDangereux,valeurTravaux) VALUES (:idStage,:idLibelleTravauxDangereux,:valeurTravaux)");
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":idLibelleTravauxDangereux", $obj->getIdLibelleTravauxDangereux());
		$q->bindValue(":valeurTravaux", $obj->getValeurTravaux());
		$q->execute();
	}

	public static function update(Valeurstravauxdangereux $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Valeurstravauxdangereux SET idTravauxDangereux=:idTravauxDangereux,idStage=:idStage,idLibelleTravauxDangereux=:idLibelleTravauxDangereux,valeurTravaux=:valeurTravaux WHERE idTravauxDangereux=:idTravauxDangereux");
		$q->bindValue(":idTravauxDangereux", $obj->getIdTravauxDangereux());
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":idLibelleTravauxDangereux", $obj->getIdLibelleTravauxDangereux());
		$q->bindValue(":valeurTravaux", $obj->getValeurTravaux());
		$q->execute();
	}
	public static function delete(Valeurstravauxdangereux $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Valeurstravauxdangereux WHERE idTravauxDangereux=" .$obj->getIdTravauxDangereux());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Valeurstravauxdangereux WHERE idTravauxDangereux =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Valeurstravauxdangereux($results);
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
		$q = $db->query("SELECT * FROM Valeurstravauxdangereux");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Valeurstravauxdangereux($donnees);
			}
		}
		return $liste;
	}
}