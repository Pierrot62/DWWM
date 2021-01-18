<?php

class LibellestravauxdangereuxManager 
{
	public static function add(Libellestravauxdangereux $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Libellestravauxdangereux (ordreTravaux,libelleTravaux) VALUES (:ordreTravaux,:libelleTravaux)");
		$q->bindValue(":ordreTravaux", $obj->getOrdreTravaux());
		$q->bindValue(":libelleTravaux", $obj->getLibelleTravaux());
		$q->execute();
	}

	public static function update(Libellestravauxdangereux $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Libellestravauxdangereux SET idLibelleTravauxDangereux=:idLibelleTravauxDangereux,ordreTravaux=:ordreTravaux,libelleTravaux=:libelleTravaux WHERE idLibelleTravauxDangereux=:idLibelleTravauxDangereux");
		$q->bindValue(":idLibelleTravauxDangereux", $obj->getIdLibelleTravauxDangereux());
		$q->bindValue(":ordreTravaux", $obj->getOrdreTravaux());
		$q->bindValue(":libelleTravaux", $obj->getLibelleTravaux());
		$q->execute();
	}
	public static function delete(Libellestravauxdangereux $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Libellestravauxdangereux WHERE idLibelleTravauxDangereux=" .$obj->getIdLibelleTravauxDangereux());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Libellestravauxdangereux WHERE idLibelleTravauxDangereux =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Libellestravauxdangereux($results);
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
		$q = $db->query("SELECT * FROM Libellestravauxdangereux");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Libellestravauxdangereux($donnees);
			}
		}
		return $liste;
	}
}