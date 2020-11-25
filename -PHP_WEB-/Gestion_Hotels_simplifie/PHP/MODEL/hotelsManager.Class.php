<?php

class HotelsManager 
{
	public static function add(Hotels $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Hotels (nomHotel,categorieHotel,adresseHotel,villeHotel,idStation) VALUES (:nomHotel,:categorieHotel,:adresseHotel,:villeHotel,:idStation)");
		$q->bindValue(":nomHotel", $obj->getNomHotel());
		$q->bindValue(":categorieHotel", $obj->getCategorieHotel());
		$q->bindValue(":adresseHotel", $obj->getAdresseHotel());
		$q->bindValue(":villeHotel", $obj->getVilleHotel());
		$q->bindValue(":idStation", $obj->getIdStation());
		$q->execute();
	}

	public static function update(Hotels $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Hotels SET idHotel=:idHotel,nomHotel=:nomHotel,categorieHotel=:categorieHotel,adresseHotel=:adresseHotel,villeHotel=:villeHotel,idStation=:idStation WHERE idHotel=:idHotel");
		$q->bindValue(":idHotel", $obj->getIdHotel());
		$q->bindValue(":nomHotel", $obj->getNomHotel());
		$q->bindValue(":categorieHotel", $obj->getCategorieHotel());
		$q->bindValue(":adresseHotel", $obj->getAdresseHotel());
		$q->bindValue(":villeHotel", $obj->getVilleHotel());
		$q->bindValue(":idStation", $obj->getIdStation());
		$q->execute();
	}
	public static function delete(Hotels $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Hotels WHERE idHotel=" .$obj->getIdHotel());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Hotels WHERE idHotel =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Hotels($results);
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
		$q = $db->query("SELECT * FROM Hotels");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Hotels($donnees);
			}
		}
		return $liste;
	}

	public static function getListCat()
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT DISTINCT categorieHotel FROM hotels");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$listeCat[] = $donnees;
			}
		}
		return $listeCat;
	}
	
	// function recupCat(){

	// 	$db=DbConnect::getDb();
	// 	$cat = $db->query('SELECT DISTINCT categorieHotel FROM hotels');
	// 	return $sth->fetch_unique(PDO::FETCH_COLUMN);
	// }
}