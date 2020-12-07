<?php

class ProduitsManager 
{
	public static function add(Produits $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Produits (NomProduit,CouleurProduit,PoidsProduit) VALUES (:NomProduit,:CouleurProduit,:PoidsProduit)");
		$q->bindValue(":NomProduit", $obj->getNomProduit());
		$q->bindValue(":CouleurProduit", $obj->getCouleurProduit());
		$q->bindValue(":PoidsProduit", $obj->getPoidsProduit());
		$q->execute();
	}

	public static function update(Produits $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Produits SET IdProduit=:IdProduit,NomProduit=:NomProduit,CouleurProduit=:CouleurProduit,PoidsProduit=:PoidsProduit WHERE IdProduit=:IdProduit");
		$q->bindValue(":IdProduit", $obj->getIdProduit());
		$q->bindValue(":NomProduit", $obj->getNomProduit());
		$q->bindValue(":CouleurProduit", $obj->getCouleurProduit());
		$q->bindValue(":PoidsProduit", $obj->getPoidsProduit());
		$q->execute();
	}
	public static function delete(Produits $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Produits WHERE IdProduit=" .$obj->getIdProduit());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Produits WHERE IdProduit =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Produits($results);
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
		$q = $db->query("SELECT * FROM Produits");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Produits($donnees);
			}
		}
		return $liste;
	}
}