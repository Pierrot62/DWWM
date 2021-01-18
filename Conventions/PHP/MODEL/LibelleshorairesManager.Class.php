<?php

class LibelleshorairesManager 
{
	public static function add(Libelleshoraires $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Libelleshoraires (ordreHoraire,libelleHoraire) VALUES (:ordreHoraire,:libelleHoraire)");
		$q->bindValue(":ordreHoraire", $obj->getOrdreHoraire());
		$q->bindValue(":libelleHoraire", $obj->getLibelleHoraire());
		$q->execute();
	}

	public static function update(Libelleshoraires $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Libelleshoraires SET idLibelleHoraire=:idLibelleHoraire,ordreHoraire=:ordreHoraire,libelleHoraire=:libelleHoraire WHERE idLibelleHoraire=:idLibelleHoraire");
		$q->bindValue(":idLibelleHoraire", $obj->getIdLibelleHoraire());
		$q->bindValue(":ordreHoraire", $obj->getOrdreHoraire());
		$q->bindValue(":libelleHoraire", $obj->getLibelleHoraire());
		$q->execute();
	}
	public static function delete(Libelleshoraires $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Libelleshoraires WHERE idLibelleHoraire=" .$obj->getIdLibelleHoraire());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Libelleshoraires WHERE idLibelleHoraire =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Libelleshoraires($results);
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
		$q = $db->query("SELECT * FROM Libelleshoraires");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Libelleshoraires($donnees);
			}
		}
		return $liste;
	}
}