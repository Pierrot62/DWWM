<?php

class ValeursTravauxDangereuxManager 
{
	public static function add(ValeursTravauxDangereux $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO ValeursTravauxDangereux (idStage,idLibelleTravauxDangereux,valeurTravaux) VALUES (:idStage,:idLibelleTravauxDangereux,:valeurTravaux)");
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":idLibelleTravauxDangereux", $obj->getIdLibelleTravauxDangereux());
		$q->bindValue(":valeurTravaux", $obj->getValeurTravaux());
		$q->execute();
	}

	public static function update(ValeursTravauxDangereux $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE ValeursTravauxDangereux SET idTravauxDangereux=:idTravauxDangereux,idStage=:idStage,idLibelleTravauxDangereux=:idLibelleTravauxDangereux,valeurTravaux=:valeurTravaux WHERE idTravauxDangereux=:idTravauxDangereux");
		$q->bindValue(":idTravauxDangereux", $obj->getIdTravauxDangereux());
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":idLibelleTravauxDangereux", $obj->getIdLibelleTravauxDangereux());
		$q->bindValue(":valeurTravaux", $obj->getValeurTravaux());
		$q->execute();
	}
	public static function delete(ValeursTravauxDangereux $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM ValeursTravauxDangereux WHERE idTravauxDangereux=" .$obj->getIdTravauxDangereux());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM ValeursTravauxDangereux WHERE idTravauxDangereux =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new ValeursTravauxDangereux($results);
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
		$q = $db->query("SELECT * FROM ValeursTravauxDangereux");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new ValeursTravauxDangereux($donnees);
			}
		}
		return $liste;
	}
}