<?php

class VilleManager 
{
	// public static function add(Ville $obj)
	// {
 	// 	$db=DbConnect::getDb();
	// 	$q=$db->prepare("INSERT INTO ville (nomVille,numDepVille,cpVille) VALUES (:nomVille,:numDepVille,:cpVille)");
	// 	$q->bindValue(":nomVille", $obj->getNomVille());
	// 	$q->bindValue(":numDepVille", $obj->getNumDepVille());
	// 	$q->bindValue(":cpVille", $obj->getCpVille());
	// 	$q->execute();
	// }

	public static function update(Ville $obj)
	{
 		$db=DbConnect::getDb();
		var_dump($obj);
		var_dump($obj->getCpVille());
		$q=$db->prepare("UPDATE ville SET idVille=:idVille,nomVille=:nomVille,numDepVille=:numDepVille,cpVille=:cpVille WHERE idVille=:idVille");
		$q->bindValue(":idVille", $obj->getIdVille());
		$q->bindValue(":nomVille", $obj->getNomVille());
		$q->bindValue(":numDepVille", $obj->getNumDepVille());
		$q->bindValue(":cpVille", $obj->getCpVille());
		var_dump($q);
		$q->execute();
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM ville WHERE idVille =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new VIlle($results);
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
		$q = $db->query("SELECT * FROM ville");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Ville($donnees);
			}
		}
		return $liste;
	}

	// public static function getListCat()
	// {
 	// 	$db=DbConnect::getDb();
	// 	$liste = [];
	// 	$q = $db->query("SELECT DISTINCT categorieHotel FROM hotels");
	// 	while($donnees = $q->fetch(PDO::FETCH_ASSOC))
	// 	{
	// 		if($donnees != false)
	// 		{
	// 			$listeCat[] = $donnees;
	// 		}
	// 	}
	// 	return $listeCat;
	// }
	
	// function recupCat(){

	// 	$db=DbConnect::getDb();
	// 	$cat = $db->query('SELECT DISTINCT categorieHotel FROM hotels');
	// 	return $sth->fetch_unique(PDO::FETCH_COLUMN);
	// }
}