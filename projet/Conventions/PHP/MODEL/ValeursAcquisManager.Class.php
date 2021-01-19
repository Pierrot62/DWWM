<?php

class ValeursAcquisManager 
{
	public static function add(ValeursAcquis $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO ValeursAcquis (idStage,ordreAcquis,libelleAcquis,valeurAcquis) VALUES (:idStage,:ordreAcquis,:libelleAcquis,:valeurAcquis)");
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":ordreAcquis", $obj->getOrdreAcquis());
		$q->bindValue(":libelleAcquis", $obj->getLibelleAcquis());
		$q->bindValue(":valeurAcquis", $obj->getValeurAcquis());
		$q->execute();
	}

	public static function update(ValeursAcquis $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE ValeursAcquis SET idValeurAcquis=:idValeurAcquis,idStage=:idStage,ordreAcquis=:ordreAcquis,libelleAcquis=:libelleAcquis,valeurAcquis=:valeurAcquis WHERE idValeurAcquis=:idValeurAcquis");
		$q->bindValue(":idValeurAcquis", $obj->getIdValeurAcquis());
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":ordreAcquis", $obj->getOrdreAcquis());
		$q->bindValue(":libelleAcquis", $obj->getLibelleAcquis());
		$q->bindValue(":valeurAcquis", $obj->getValeurAcquis());
		$q->execute();
	}
	public static function delete(ValeursAcquis $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM ValeursAcquis WHERE idValeurAcquis=" .$obj->getIdValeurAcquis());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM ValeursAcquis WHERE idValeurAcquis =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new ValeursAcquis($results);
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
		$q = $db->query("SELECT * FROM ValeursAcquis");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new ValeursAcquis($donnees);
			}
		}
		return $liste;
	}
}