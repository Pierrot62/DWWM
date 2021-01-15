<?php

class LibellehorairesManager 
{
	public static function add(Libellehoraires $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Libellehoraires (ordreHoraire,libelleHoraire) VALUES (:ordreHoraire,:libelleHoraire)");
		$q->bindValue(":ordreHoraire", $obj->getOrdreHoraire());
		$q->bindValue(":libelleHoraire", $obj->getLibelleHoraire());
		$q->execute();
	}

	public static function update(Libellehoraires $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Libellehoraires SET idLibelleHoraire=:idLibelleHoraire,ordreHoraire=:ordreHoraire,libelleHoraire=:libelleHoraire WHERE idLibelleHoraire=:idLibelleHoraire");
		$q->bindValue(":idLibelleHoraire", $obj->getIdLibelleHoraire());
		$q->bindValue(":ordreHoraire", $obj->getOrdreHoraire());
		$q->bindValue(":libelleHoraire", $obj->getLibelleHoraire());
		$q->execute();
	}
	public static function delete(Libellehoraires $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Libellehoraires WHERE idLibelleHoraire=" .$obj->getIdLibelleHoraire());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Libellehoraires WHERE idLibelleHoraire =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Libellehoraires($results);
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
		$q = $db->query("SELECT * FROM Libellehoraires");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Libellehoraires($donnees);
			}
		}
		return $liste;
	}
}