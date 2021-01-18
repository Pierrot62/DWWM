<?php

class ValeurshorairesManager 
{
	public static function add(Valeurshoraires $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Valeurshoraires (idStage,idLibelleHoraire,valeurHoraire) VALUES (:idStage,:idLibelleHoraire,:valeurHoraire)");
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":idLibelleHoraire", $obj->getIdLibelleHoraire());
		$q->bindValue(":valeurHoraire", $obj->getValeurHoraire());
		$q->execute();
	}

	public static function update(Valeurshoraires $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Valeurshoraires SET idValeurHoraire=:idValeurHoraire,idStage=:idStage,idLibelleHoraire=:idLibelleHoraire,valeurHoraire=:valeurHoraire WHERE idValeurHoraire=:idValeurHoraire");
		$q->bindValue(":idValeurHoraire", $obj->getIdValeurHoraire());
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":idLibelleHoraire", $obj->getIdLibelleHoraire());
		$q->bindValue(":valeurHoraire", $obj->getValeurHoraire());
		$q->execute();
	}
	public static function delete(Valeurshoraires $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Valeurshoraires WHERE idValeurHoraire=" .$obj->getIdValeurHoraire());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Valeurshoraires WHERE idValeurHoraire =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Valeurshoraires($results);
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
		$q = $db->query("SELECT * FROM Valeurshoraires");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Valeurshoraires($donnees);
			}
		}
		return $liste;
	}
}