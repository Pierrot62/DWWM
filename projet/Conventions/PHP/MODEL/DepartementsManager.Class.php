<?php

class DepartementsManager 
{
	public static function add(Departements $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Departements (libelleDepartement,idRegion) VALUES (:libelleDepartement,:idRegion)");
		$q->bindValue(":libelleDepartement", $obj->getLibelleDepartement());
		$q->bindValue(":idRegion", $obj->getIdRegion());
		$q->execute();
	}

	public static function update(Departements $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Departements SET idDepartement=:idDepartement,libelleDepartement=:libelleDepartement,idRegion=:idRegion WHERE idDepartement=:idDepartement");
		$q->bindValue(":idDepartement", $obj->getIdDepartement());
		$q->bindValue(":libelleDepartement", $obj->getLibelleDepartement());
		$q->bindValue(":idRegion", $obj->getIdRegion());
		$q->execute();
	}
	public static function delete(Departements $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Departements WHERE idDepartement=" .$obj->getIdDepartement());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Departements WHERE idDepartement =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Departements($results);
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
		$q = $db->query("SELECT * FROM Departements");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Departements($donnees);
			}
		}
		return $liste;
	}
	public static function getByRegion($idRegion)
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM Departements where idRegion = ".$idRegion);
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Departements($donnees);
			}
		}
		return $liste;
	}
}