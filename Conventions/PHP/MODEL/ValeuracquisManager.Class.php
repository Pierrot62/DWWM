<?php

class ValeuracquisManager 
{
	public static function add(Valeuracquis $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Valeuracquis (idStage,ordreAcquis,libelleAcquis,valeurAcquis) VALUES (:idStage,:ordreAcquis,:libelleAcquis,:valeurAcquis)");
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":ordreAcquis", $obj->getOrdreAcquis());
		$q->bindValue(":libelleAcquis", $obj->getLibelleAcquis());
		$q->bindValue(":valeurAcquis", $obj->getValeurAcquis());
		$q->execute();
	}

	public static function update(Valeuracquis $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Valeuracquis SET idValeurAcquis=:idValeurAcquis,idStage=:idStage,ordreAcquis=:ordreAcquis,libelleAcquis=:libelleAcquis,valeurAcquis=:valeurAcquis WHERE idValeurAcquis=:idValeurAcquis");
		$q->bindValue(":idValeurAcquis", $obj->getIdValeurAcquis());
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":ordreAcquis", $obj->getOrdreAcquis());
		$q->bindValue(":libelleAcquis", $obj->getLibelleAcquis());
		$q->bindValue(":valeurAcquis", $obj->getValeurAcquis());
		$q->execute();
	}
	public static function delete(Valeuracquis $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Valeuracquis WHERE idValeurAcquis=" .$obj->getIdValeurAcquis());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Valeuracquis WHERE idValeurAcquis =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Valeuracquis($results);
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
		$q = $db->query("SELECT * FROM Valeuracquis");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Valeuracquis($donnees);
			}
		}
		return $liste;
	}
}