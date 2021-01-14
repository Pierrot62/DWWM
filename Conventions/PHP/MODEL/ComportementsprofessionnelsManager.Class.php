<?php

class ComportementsprofessionnelsManager 
{
	public static function add(Comportementsprofessionnels $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Comportementsprofessionnels (ordreComportement,libelleComportement) VALUES (:ordreComportement,:libelleComportement)");
		$q->bindValue(":ordreComportement", $obj->getOrdreComportement());
		$q->bindValue(":libelleComportement", $obj->getLibelleComportement());
		$q->execute();
	}

	public static function update(Comportementsprofessionnels $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Comportementsprofessionnels SET idStage=:idStage,ordreComportement=:ordreComportement,libelleComportement=:libelleComportement WHERE idStage=:idStage");
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":ordreComportement", $obj->getOrdreComportement());
		$q->bindValue(":libelleComportement", $obj->getLibelleComportement());
		$q->execute();
	}
	public static function delete(Comportementsprofessionnels $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Comportementsprofessionnels WHERE idStage=" .$obj->getIdStage());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Comportementsprofessionnels WHERE idStage =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Comportementsprofessionnels($results);
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
		$q = $db->query("SELECT * FROM Comportementsprofessionnels");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Comportementsprofessionnels($donnees);
			}
		}
		return $liste;
	}
}