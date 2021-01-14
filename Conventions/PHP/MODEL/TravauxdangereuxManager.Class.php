<?php

class TravauxdangereuxManager 
{
	public static function add(Travauxdangereux $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Travauxdangereux (ordreTravaux,libelleTravaux) VALUES (:ordreTravaux,:libelleTravaux)");
		$q->bindValue(":ordreTravaux", $obj->getOrdreTravaux());
		$q->bindValue(":libelleTravaux", $obj->getLibelleTravaux());
		$q->execute();
	}

	public static function update(Travauxdangereux $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Travauxdangereux SET idStage=:idStage,ordreTravaux=:ordreTravaux,libelleTravaux=:libelleTravaux WHERE idStage=:idStage");
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":ordreTravaux", $obj->getOrdreTravaux());
		$q->bindValue(":libelleTravaux", $obj->getLibelleTravaux());
		$q->execute();
	}
	public static function delete(Travauxdangereux $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Travauxdangereux WHERE idStage=" .$obj->getIdStage());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Travauxdangereux WHERE idStage =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Travauxdangereux($results);
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
		$q = $db->query("SELECT * FROM Travauxdangereux");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Travauxdangereux($donnees);
			}
		}
		return $liste;
	}
}