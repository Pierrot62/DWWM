<?php

class VentesManager 
{
	public static function add(Ventes $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Ventes (IdRepres,IdProduit,IdClient,Quantite) VALUES (:IdRepres,:IdProduit,:IdClient,:Quantite)");
		$q->bindValue(":IdRepres", $obj->getIdRepres());
		$q->bindValue(":IdProduit", $obj->getIdProduit());
		$q->bindValue(":IdClient", $obj->getIdClient());
		$q->bindValue(":Quantite", $obj->getQuantite());
		$q->execute();
	}

	public static function update(Ventes $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Ventes SET IdVente=:IdVente,IdRepres=:IdRepres,IdProduit=:IdProduit,IdClient=:IdClient,Quantite=:Quantite WHERE IdVente=:IdVente");
		$q->bindValue(":IdVente", $obj->getIdVente());
		$q->bindValue(":IdRepres", $obj->getIdRepres());
		$q->bindValue(":IdProduit", $obj->getIdProduit());
		$q->bindValue(":IdClient", $obj->getIdClient());
		$q->bindValue(":Quantite", $obj->getQuantite());
		$q->execute();
	}
	public static function delete(Ventes $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Ventes WHERE IdVente=" .$obj->getIdVente());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Ventes WHERE IdVente =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Ventes($results);
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
		$q = $db->query("SELECT * FROM Ventes");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Ventes($donnees);
			}
		}
		return $liste;
	}
}