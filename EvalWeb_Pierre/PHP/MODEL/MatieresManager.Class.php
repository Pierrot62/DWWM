<?php

class MatieresManager 
{
	public static function add(Matieres $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Matieres (LibelleMatiere) VALUES (:LibelleMatiere)");
		$q->bindValue(":LibelleMatiere", $obj->getLibelleMatiere());
		$q->execute();
	}

	public static function update(Matieres $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Matieres SET idMatiere=:idMatiere,LibelleMatiere=:LibelleMatiere WHERE idMatiere=:idMatiere");
		$q->bindValue(":idMatiere", $obj->getIdMatiere());
		$q->bindValue(":LibelleMatiere", $obj->getLibelleMatiere());
		$q->execute();
	}
	public static function delete(Matieres $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Matieres WHERE idMatiere=" .$obj->getIdMatiere());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Matieres WHERE idMatiere =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Matieres($results);
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
		$q = $db->query("SELECT * FROM Matieres");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Matieres($donnees);
			}
		}
		return $liste;
	}
}