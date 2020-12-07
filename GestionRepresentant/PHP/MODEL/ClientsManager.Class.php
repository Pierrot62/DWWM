<?php

class ClientsManager 
{
	public static function add(Clients $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Clients (NomClient,VilleClient) VALUES (:NomClient,:VilleClient)");
		$q->bindValue(":NomClient", $obj->getNomClient());
		$q->bindValue(":VilleClient", $obj->getVilleClient());
		$q->execute();
	}

	public static function update(Clients $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Clients SET IdClient=:IdClient,NomClient=:NomClient,VilleClient=:VilleClient WHERE IdClient=:IdClient");
		$q->bindValue(":IdClient", $obj->getIdClient());
		$q->bindValue(":NomClient", $obj->getNomClient());
		$q->bindValue(":VilleClient", $obj->getVilleClient());
		$q->execute();
	}
	public static function delete(Clients $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Clients WHERE IdClient=" .$obj->getIdClient());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Clients WHERE IdClient =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Clients($results);
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
		$q = $db->query("SELECT * FROM Clients");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Clients($donnees);
			}
		}
		return $liste;
	}
}