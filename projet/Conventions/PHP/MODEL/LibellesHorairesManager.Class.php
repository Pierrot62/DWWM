<?php

class LibellesHorairesManager 
{
	public static function add(LibellesHoraires $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO LibellesHoraires (ordreHoraire,libelleHoraire) VALUES (:ordreHoraire,:libelleHoraire)");
		$q->bindValue(":ordreHoraire", $obj->getOrdreHoraire());
		$q->bindValue(":libelleHoraire", $obj->getLibelleHoraire());
		$q->execute();
	}

	public static function update(LibellesHoraires $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE LibellesHoraires SET idLibelleHoraire=:idLibelleHoraire,ordreHoraire=:ordreHoraire,libelleHoraire=:libelleHoraire WHERE idLibelleHoraire=:idLibelleHoraire");
		$q->bindValue(":idLibelleHoraire", $obj->getIdLibelleHoraire());
		$q->bindValue(":ordreHoraire", $obj->getOrdreHoraire());
		$q->bindValue(":libelleHoraire", $obj->getLibelleHoraire());
		$q->execute();
	}
	public static function delete(LibellesHoraires $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM LibellesHoraires WHERE idLibelleHoraire=" .$obj->getIdLibelleHoraire());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM LibellesHoraires WHERE idLibelleHoraire =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new LibellesHoraires($results);
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
		$q = $db->query("SELECT * FROM LibellesHoraires");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new LibellesHoraires($donnees);
			}
		}
		return $liste;
	}
	public static function getByLibelle($libelle)
	{
 		$db=DbConnect::getDb();
		$q=$db->query("SELECT * FROM LibellesHoraires WHERE libelleHoraire ='".$libelle."'");
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new LibellesHoraires($results);
		}
		else
		{
			return false;
		}
	}
}