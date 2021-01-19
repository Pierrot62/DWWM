<?php

class LibellesTravauxDangereuxManager 
{
	public static function add(LibellesTravauxDangereux $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO LibellesTravauxDangereux (ordreTravaux,libelleTravaux) VALUES (:ordreTravaux,:libelleTravaux)");
		$q->bindValue(":ordreTravaux", $obj->getOrdreTravaux());
		$q->bindValue(":libelleTravaux", $obj->getLibelleTravaux());
		$q->execute();
	}

	public static function update(LibellesTravauxDangereux $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE LibellesTravauxDangereux SET idLibelleTravauxDangereux=:idLibelleTravauxDangereux,ordreTravaux=:ordreTravaux,libelleTravaux=:libelleTravaux WHERE idLibelleTravauxDangereux=:idLibelleTravauxDangereux");
		$q->bindValue(":idLibelleTravauxDangereux", $obj->getIdLibelleTravauxDangereux());
		$q->bindValue(":ordreTravaux", $obj->getOrdreTravaux());
		$q->bindValue(":libelleTravaux", $obj->getLibelleTravaux());
		$q->execute();
	}
	public static function delete(LibellesTravauxDangereux $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM LibellesTravauxDangereux WHERE idLibelleTravauxDangereux=" .$obj->getIdLibelleTravauxDangereux());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM LibellesTravauxDangereux WHERE idLibelleTravauxDangereux =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new LibellesTravauxDangereux($results);
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
		$q = $db->query("SELECT * FROM LibellesTravauxDangereux");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new LibellesTravauxDangereux($donnees);
			}
		}
		return $liste;
	}
}