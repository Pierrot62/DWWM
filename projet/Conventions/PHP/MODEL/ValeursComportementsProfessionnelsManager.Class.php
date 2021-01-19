<?php

class ValeursComportementsProfessionnelsManager 
{
	public static function add(ValeursComportementsProfessionnels $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Valeurscomportementsprofessionnels (idStage,idLibelleComportementProfessionnel,valeurComportement) VALUES (:idStage,:idLibelleComportementProfessionnel,:valeurComportement)");
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":idLibelleComportementProfessionnel", $obj->getIdLibelleComportementProfessionnel());
		$q->bindValue(":valeurComportement", $obj->getValeurComportement());
		$q->execute();
	}

	public static function update(ValeursComportementsProfessionnels $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Valeurscomportementsprofessionnels SET idComportementProfessionnel=:idComportementProfessionnel,idStage=:idStage,idLibelleComportementProfessionnel=:idLibelleComportementProfessionnel,valeurComportement=:valeurComportement WHERE idComportementProfessionnel=:idComportementProfessionnel");
		$q->bindValue(":idComportementProfessionnel", $obj->getIdComportementProfessionnel());
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":idLibelleComportementProfessionnel", $obj->getIdLibelleComportementProfessionnel());
		$q->bindValue(":valeurComportement", $obj->getValeurComportement());
		$q->execute();
	}
	public static function delete(ValeursComportementsProfessionnels $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Valeurscomportementsprofessionnels WHERE idComportementProfessionnel=" .$obj->getIdComportementProfessionnel());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Valeurscomportementsprofessionnels WHERE idComportementProfessionnel =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Valeurscomportementsprofessionnels($results);
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
		$q = $db->query("SELECT * FROM Valeurscomportementsprofessionnels");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Valeurscomportementsprofessionnels($donnees);
			}
		}
		return $liste;
	}
}