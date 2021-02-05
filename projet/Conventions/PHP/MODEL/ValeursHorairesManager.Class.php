<?php

class ValeursHorairesManager 
{
	public static function add(ValeursHoraires $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Valeurshoraires (idStage,idLibelleHoraire,valeurHoraire) VALUES (:idStage,:idLibelleHoraire,:valeurHoraire)");
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":idLibelleHoraire", $obj->getIdLibelleHoraire());
		$q->bindValue(":valeurHoraire", $obj->getValeurHoraire());
		$q->execute();
	}

	public static function update(ValeursHoraires $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Valeurshoraires SET idValeurHoraires=:idValeurHoraires,idStage=:idStage,idLibelleHoraire=:idLibelleHoraire,valeurHoraire=:valeurHoraire WHERE idValeurHoraires=:idValeurHoraires");
		$q->bindValue(":idValeurHoraires", $obj->getIdValeurHoraires());
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":idLibelleHoraire", $obj->getIdLibelleHoraire());
		$q->bindValue(":valeurHoraire", $obj->getValeurHoraire());
		$q->execute();
	}
	public static function delete(ValeursHoraires $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Valeurshoraires WHERE idValeurHoraires=" .$obj->getIdValeurHoraires());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Valeurshoraires WHERE idValeurHoraires =".$id);
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
	public static function getListByStage($idStage)
	{
		$db=DbConnect::getDb();
		$id=(int)$idStage; 
		$liste = [];
		$q = $db->query("SELECT * FROM Valeurshoraires WHERE idStage =".$id);
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Valeurshoraires($donnees);
			}
		}
		return $liste;
	}
	public static function getListByStageEtLibelle($idStage, $idLibelle)
	{
		$db=DbConnect::getDb();
		$id=(int)$idStage; 
		$liste = [];
		$q = $db->query("SELECT * FROM Valeurshoraires WHERE idStage =".$id ." AND idLibelleHoraire = ". $idLibelle);
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
}