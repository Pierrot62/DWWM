<?php

class ValeursacquisManager 
{
	public static function add(Valeursacquis $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Valeursacquis (idStage,ordreAcquis,libelleAcquis,valeurAcquis) VALUES (:idStage,:ordreAcquis,:libelleAcquis,:valeurAcquis)");
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":ordreAcquis", $obj->getOrdreAcquis());
		$q->bindValue(":libelleAcquis", $obj->getLibelleAcquis());
		$q->bindValue(":valeurAcquis", $obj->getValeurAcquis());
		$q->execute();
	}

	public static function update(Valeursacquis $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Valeursacquis SET idValeurAcquis=:idValeurAcquis,idStage=:idStage,ordreAcquis=:ordreAcquis,libelleAcquis=:libelleAcquis,valeurAcquis=:valeurAcquis WHERE idValeurAcquis=:idValeurAcquis");
		$q->bindValue(":idValeurAcquis", $obj->getIdValeurAcquis());
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":ordreAcquis", $obj->getOrdreAcquis());
		$q->bindValue(":libelleAcquis", $obj->getLibelleAcquis());
		$q->bindValue(":valeurAcquis", $obj->getValeurAcquis());
		$q->execute();
	}
	public static function delete(Valeursacquis $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Valeursacquis WHERE idValeurAcquis=" .$obj->getIdValeurAcquis());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Valeursacquis WHERE idValeurAcquis =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Valeursacquis($results);
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
		$q = $db->query("SELECT * FROM Valeursacquis");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Valeursacquis($donnees);
			}
		}
		return $liste;
	}
}