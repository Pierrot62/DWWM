<?php

class ValeurhorairesManager 
{
	public static function add(Valeurhoraires $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Valeurhoraires (idStage,idLibelleHoraire,valeurHoraire) VALUES (:idStage,:idLibelleHoraire,:valeurHoraire)");
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":idLibelleHoraire", $obj->getIdLibelleHoraire());
		$q->bindValue(":valeurHoraire", $obj->getValeurHoraire());
		$q->execute();
	}

	public static function update(Valeurhoraires $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Valeurhoraires SET idValeurHoraires=:idValeurHoraires,idStage=:idStage,idLibelleHoraire=:idLibelleHoraire,valeurHoraire=:valeurHoraire WHERE idValeurHoraires=:idValeurHoraires");
		$q->bindValue(":idValeurHoraires", $obj->getIdValeurHoraires());
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":idLibelleHoraire", $obj->getIdLibelleHoraire());
		$q->bindValue(":valeurHoraire", $obj->getValeurHoraire());
		$q->execute();
	}
	public static function delete(Valeurhoraires $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Valeurhoraires WHERE idValeurHoraires=" .$obj->getIdValeurHoraires());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Valeurhoraires WHERE idValeurHoraires =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Valeurhoraires($results);
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
		$q = $db->query("SELECT * FROM Valeurhoraires");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Valeurhoraires($donnees);
			}
		}
		return $liste;
	}
}