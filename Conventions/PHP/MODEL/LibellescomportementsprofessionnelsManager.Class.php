<?php

class LibellescomportementsprofessionnelsManager 
{
	public static function add(Libellescomportementsprofessionnels $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Libellescomportementsprofessionnels (ordreComportement,libelleComportement) VALUES (:ordreComportement,:libelleComportement)");
		$q->bindValue(":ordreComportement", $obj->getOrdreComportement());
		$q->bindValue(":libelleComportement", $obj->getLibelleComportement());
		$q->execute();
	}

	public static function update(Libellescomportementsprofessionnels $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Libellescomportementsprofessionnels SET idLibelleComportementProfessionnel=:idLibelleComportementProfessionnel,ordreComportement=:ordreComportement,libelleComportement=:libelleComportement WHERE idLibelleComportementProfessionnel=:idLibelleComportementProfessionnel");
		$q->bindValue(":idLibelleComportementProfessionnel", $obj->getIdLibelleComportementProfessionnel());
		$q->bindValue(":ordreComportement", $obj->getOrdreComportement());
		$q->bindValue(":libelleComportement", $obj->getLibelleComportement());
		$q->execute();
	}
	public static function delete(Libellescomportementsprofessionnels $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Libellescomportementsprofessionnels WHERE idLibelleComportementProfessionnel=" .$obj->getIdLibelleComportementProfessionnel());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Libellescomportementsprofessionnels WHERE idLibelleComportementProfessionnel =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Libellescomportementsprofessionnels($results);
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
		$q = $db->query("SELECT * FROM Libellescomportementsprofessionnels");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Libellescomportementsprofessionnels($donnees);
			}
		}
		return $liste;
	}
}