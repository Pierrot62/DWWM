<?php

class SuivisManager 
{
	public static function add(Suivis $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Suivis (idMatiere,idEleve,Note,Coefficient) VALUES (:idMatiere,:idEleve,:Note,:Coefficient)");
		$q->bindValue(":idMatiere", $obj->getIdMatiere());
		$q->bindValue(":idEleve", $obj->getIdEleve());
		$q->bindValue(":Note", $obj->getNote());
		$q->bindValue(":Coefficient", $obj->getCoefficient());
		$q->execute();
	}

	public static function update(Suivis $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Suivis SET idSuivi=:idSuivi,idMatiere=:idMatiere,idEleve=:idEleve,Note=:Note,Coefficient=:Coefficient WHERE idSuivi=:idSuivi");
		$q->bindValue(":idSuivi", $obj->getIdSuivi());
		$q->bindValue(":idMatiere", $obj->getIdMatiere());
		$q->bindValue(":idEleve", $obj->getIdEleve());
		$q->bindValue(":Note", $obj->getNote());
		$q->bindValue(":Coefficient", $obj->getCoefficient());
		$q->execute();
	}
	public static function delete(Suivis $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Suivis WHERE idSuivi=" .$obj->getIdSuivi());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Suivis WHERE idSuivi =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Suivis($results);
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
		$q = $db->query("SELECT * FROM Suivis");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Suivis($donnees);
			}
		}
		return $liste;
	}
}