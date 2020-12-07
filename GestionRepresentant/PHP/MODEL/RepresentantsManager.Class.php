<?php

class RepresentantsManager 
{
	public static function add(Representants $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Representants (NomRepres,VilleRepres) VALUES (:NomRepres,:VilleRepres)");
		$q->bindValue(":NomRepres", $obj->getNomRepres());
		$q->bindValue(":VilleRepres", $obj->getVilleRepres());
		$q->execute();
	}

	public static function update(Representants $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Representants SET IdRepres=:IdRepres,NomRepres=:NomRepres,VilleRepres=:VilleRepres WHERE IdRepres=:IdRepres");
		$q->bindValue(":IdRepres", $obj->getIdRepres());
		$q->bindValue(":NomRepres", $obj->getNomRepres());
		$q->bindValue(":VilleRepres", $obj->getVilleRepres());
		$q->execute();
	}
	public static function delete(Representants $obj)
	{
		$db=DbConnect::getDb();
		$db->exec("UPDATE ventes SET IdRepres = 1 WHERE IdRepres=" .$obj->getIdRepres() );
		$db->exec("DELETE FROM Representants WHERE IdRepres=" .$obj->getIdRepres());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Representants WHERE IdRepres =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Representants($results);
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
		$q = $db->query("SELECT * FROM Representants");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Representants($donnees);
			}
		}
		return $liste;
	}
}