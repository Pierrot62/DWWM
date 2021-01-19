<?php

class PeriodesStagesManager 
{
	public static function add(PeriodesStages $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO PeriodesStages (idSessionFormation,dateDebutPAE,dateFinPAE,dateRapportSuivi,objectifPAE) VALUES (:idSessionFormation,:dateDebutPAE,:dateFinPAE,:dateRapportSuivi,:objectifPAE)");
		$q->bindValue(":idSessionFormation", $obj->getIdSessionFormation());
		$q->bindValue(":dateDebutPAE", $obj->getDateDebutPAE());
		$q->bindValue(":dateFinPAE", $obj->getDateFinPAE());
		$q->bindValue(":dateRapportSuivi", $obj->getDateRapportSuivi());
		$q->bindValue(":objectifPAE", $obj->getObjectifPAE());
		$q->execute();
	}

	public static function update(PeriodesStages $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE PeriodesStages SET idPeriode=:idPeriode,idSessionFormation=:idSessionFormation,dateDebutPAE=:dateDebutPAE,dateFinPAE=:dateFinPAE,dateRapportSuivi=:dateRapportSuivi,objectifPAE=:objectifPAE WHERE idPeriode=:idPeriode");
		$q->bindValue(":idPeriode", $obj->getIdPeriode());
		$q->bindValue(":idSessionFormation", $obj->getIdSessionFormation());
		$q->bindValue(":dateDebutPAE", $obj->getDateDebutPAE());
		$q->bindValue(":dateFinPAE", $obj->getDateFinPAE());
		$q->bindValue(":dateRapportSuivi", $obj->getDateRapportSuivi());
		$q->bindValue(":objectifPAE", $obj->getObjectifPAE());
		$q->execute();
	}
	public static function delete(PeriodesStages $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM PeriodesStages WHERE idPeriode=" .$obj->getIdPeriode());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM PeriodesStages WHERE idPeriode =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new PeriodesStages($results);
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
		$q = $db->query("SELECT * FROM PeriodesStages");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new PeriodesStages($donnees);
			}
		}
		return $liste;
	}
}