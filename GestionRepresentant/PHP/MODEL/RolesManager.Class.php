<?php

class RolesManager 
{
	public static function add(Roles $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Roles (TitreRole,numRole) VALUES (:TitreRole,:numRole)");
		$q->bindValue(":TitreRole", $obj->getTitreRole());
		$q->bindValue(":numRole", $obj->getNumRole());
		$q->execute();
	}

	public static function update(Roles $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Roles SET idRole=:idRole,TitreRole=:TitreRole,numRole=:numRole WHERE idRole=:idRole");
		$q->bindValue(":idRole", $obj->getIdRole());
		$q->bindValue(":TitreRole", $obj->getTitreRole());
		$q->bindValue(":numRole", $obj->getNumRole());
		$q->execute();
	}
	public static function delete(Roles $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Roles WHERE idRole=" .$obj->getIdRole());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Roles WHERE idRole =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Roles($results);
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
		$q = $db->query("SELECT * FROM Roles");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Roles($donnees);
			}
		}
		return $liste;
	}
}