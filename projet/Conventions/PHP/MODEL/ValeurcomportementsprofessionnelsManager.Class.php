<?php

class ValeurcomportementsprofessionnelsManager 
{
	public static function add(Valeurcomportementsprofessionnels $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Valeurcomportementsprofessionnels (idStage,idLibelleComportementProfessionnel,valeurComportement) VALUES (:idStage,:idLibelleComportementProfessionnel,:valeurComportement)");
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":idLibelleComportementProfessionnel", $obj->getIdLibelleComportementProfessionnel());
		$q->bindValue(":valeurComportement", $obj->getValeurComportement());
		$q->execute();
	}

	public static function update(Valeurcomportementsprofessionnels $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Valeurcomportementsprofessionnels SET idComportementProfessionnel=:idComportementProfessionnel,idStage=:idStage,idLibelleComportementProfessionnel=:idLibelleComportementProfessionnel,valeurComportement=:valeurComportement WHERE idComportementProfessionnel=:idComportementProfessionnel");
		$q->bindValue(":idComportementProfessionnel", $obj->getIdComportementProfessionnel());
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":idLibelleComportementProfessionnel", $obj->getIdLibelleComportementProfessionnel());
		$q->bindValue(":valeurComportement", $obj->getValeurComportement());
		$q->execute();
	}
	public static function delete(Valeurcomportementsprofessionnels $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Valeurcomportementsprofessionnels WHERE idComportementProfessionnel=" .$obj->getIdComportementProfessionnel());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Valeurcomportementsprofessionnels WHERE idComportementProfessionnel =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Valeurcomportementsprofessionnels($results);
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
		$q = $db->query("SELECT * FROM Valeurcomportementsprofessionnels");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Valeurcomportementsprofessionnels($donnees);
			}
		}
		return $liste;
	}
}