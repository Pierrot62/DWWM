<?php

class LibellecomportementsprofessionnelsManager 
{
	public static function add(Libellecomportementsprofessionnels $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Libellecomportementsprofessionnels (ordreComportement,libelleComportement) VALUES (:ordreComportement,:libelleComportement)");
		$q->bindValue(":ordreComportement", $obj->getOrdreComportement());
		$q->bindValue(":libelleComportement", $obj->getLibelleComportement());
		$q->execute();
	}

	public static function update(Libellecomportementsprofessionnels $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Libellecomportementsprofessionnels SET idLibelleComportementProfessionnel=:idLibelleComportementProfessionnel,ordreComportement=:ordreComportement,libelleComportement=:libelleComportement WHERE idLibelleComportementProfessionnel=:idLibelleComportementProfessionnel");
		$q->bindValue(":idLibelleComportementProfessionnel", $obj->getIdLibelleComportementProfessionnel());
		$q->bindValue(":ordreComportement", $obj->getOrdreComportement());
		$q->bindValue(":libelleComportement", $obj->getLibelleComportement());
		$q->execute();
	}
	public static function delete(Libellecomportementsprofessionnels $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Libellecomportementsprofessionnels WHERE idLibelleComportementProfessionnel=" .$obj->getIdLibelleComportementProfessionnel());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Libellecomportementsprofessionnels WHERE idLibelleComportementProfessionnel =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Libellecomportementsprofessionnels($results);
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
		$q = $db->query("SELECT * FROM Libellecomportementsprofessionnels");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Libellecomportementsprofessionnels($donnees);
			}
		}
		return $liste;
	}
}