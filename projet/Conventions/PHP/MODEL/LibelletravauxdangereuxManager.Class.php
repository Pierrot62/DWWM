<?php

class LibelletravauxdangereuxManager 
{
	public static function add(Libelletravauxdangereux $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Libelletravauxdangereux (ordreTravaux,libelleTravaux) VALUES (:ordreTravaux,:libelleTravaux)");
		$q->bindValue(":ordreTravaux", $obj->getOrdreTravaux());
		$q->bindValue(":libelleTravaux", $obj->getLibelleTravaux());
		$q->execute();
	}

	public static function update(Libelletravauxdangereux $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Libelletravauxdangereux SET idLibelleTravauxDangereux=:idLibelleTravauxDangereux,ordreTravaux=:ordreTravaux,libelleTravaux=:libelleTravaux WHERE idLibelleTravauxDangereux=:idLibelleTravauxDangereux");
		$q->bindValue(":idLibelleTravauxDangereux", $obj->getIdLibelleTravauxDangereux());
		$q->bindValue(":ordreTravaux", $obj->getOrdreTravaux());
		$q->bindValue(":libelleTravaux", $obj->getLibelleTravaux());
		$q->execute();
	}
	public static function delete(Libelletravauxdangereux $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Libelletravauxdangereux WHERE idLibelleTravauxDangereux=" .$obj->getIdLibelleTravauxDangereux());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Libelletravauxdangereux WHERE idLibelleTravauxDangereux =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Libelletravauxdangereux($results);
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
		$q = $db->query("SELECT * FROM Libelletravauxdangereux");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Libelletravauxdangereux($donnees);
			}
		}
		return $liste;
	}
}