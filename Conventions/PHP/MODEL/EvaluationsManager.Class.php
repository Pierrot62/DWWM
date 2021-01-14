<?php

class EvaluationsManager 
{
	public static function add(Evaluations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Evaluations (dateEvaluation,objectifAcquisition,comportementMt,evalComportement,libelleAcquis1,libelleAcquis2,libelleAcquis3,libelleAcquis4,libelleAcquis5,libelleAcquis6,libelleAcquis7,libelleAcquis8,libelleAcquis9,libelleAcquis10,acquis1,acquis2,acquis3,acquis4,acquis5,acquis6,acquis7,acquis8,acquis9,acquis10) VALUES (:dateEvaluation,:objectifAcquisition,:comportementMt,:evalComportement,:libelleAcquis1,:libelleAcquis2,:libelleAcquis3,:libelleAcquis4,:libelleAcquis5,:libelleAcquis6,:libelleAcquis7,:libelleAcquis8,:libelleAcquis9,:libelleAcquis10,:acquis1,:acquis2,:acquis3,:acquis4,:acquis5,:acquis6,:acquis7,:acquis8,:acquis9,:acquis10)");
		$q->bindValue(":dateEvaluation", $obj->getDateEvaluation());
		$q->bindValue(":objectifAcquisition", $obj->getObjectifAcquisition());
		$q->bindValue(":comportementMt", $obj->getComportementMt());
		$q->bindValue(":evalComportement", $obj->getEvalComportement());
		$q->bindValue(":libelleAcquis1", $obj->getLibelleAcquis1());
		$q->bindValue(":libelleAcquis2", $obj->getLibelleAcquis2());
		$q->bindValue(":libelleAcquis3", $obj->getLibelleAcquis3());
		$q->bindValue(":libelleAcquis4", $obj->getLibelleAcquis4());
		$q->bindValue(":libelleAcquis5", $obj->getLibelleAcquis5());
		$q->bindValue(":libelleAcquis6", $obj->getLibelleAcquis6());
		$q->bindValue(":libelleAcquis7", $obj->getLibelleAcquis7());
		$q->bindValue(":libelleAcquis8", $obj->getLibelleAcquis8());
		$q->bindValue(":libelleAcquis9", $obj->getLibelleAcquis9());
		$q->bindValue(":libelleAcquis10", $obj->getLibelleAcquis10());
		$q->bindValue(":acquis1", $obj->getAcquis1());
		$q->bindValue(":acquis2", $obj->getAcquis2());
		$q->bindValue(":acquis3", $obj->getAcquis3());
		$q->bindValue(":acquis4", $obj->getAcquis4());
		$q->bindValue(":acquis5", $obj->getAcquis5());
		$q->bindValue(":acquis6", $obj->getAcquis6());
		$q->bindValue(":acquis7", $obj->getAcquis7());
		$q->bindValue(":acquis8", $obj->getAcquis8());
		$q->bindValue(":acquis9", $obj->getAcquis9());
		$q->bindValue(":acquis10", $obj->getAcquis10());
		$q->execute();
	}

	public static function update(Evaluations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Evaluations SET idStage=:idStage,dateEvaluation=:dateEvaluation,objectifAcquisition=:objectifAcquisition,comportementMt=:comportementMt,evalComportement=:evalComportement,libelleAcquis1=:libelleAcquis1,libelleAcquis2=:libelleAcquis2,libelleAcquis3=:libelleAcquis3,libelleAcquis4=:libelleAcquis4,libelleAcquis5=:libelleAcquis5,libelleAcquis6=:libelleAcquis6,libelleAcquis7=:libelleAcquis7,libelleAcquis8=:libelleAcquis8,libelleAcquis9=:libelleAcquis9,libelleAcquis10=:libelleAcquis10,acquis1=:acquis1,acquis2=:acquis2,acquis3=:acquis3,acquis4=:acquis4,acquis5=:acquis5,acquis6=:acquis6,acquis7=:acquis7,acquis8=:acquis8,acquis9=:acquis9,acquis10=:acquis10 WHERE idStage=:idStage");
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":dateEvaluation", $obj->getDateEvaluation());
		$q->bindValue(":objectifAcquisition", $obj->getObjectifAcquisition());
		$q->bindValue(":comportementMt", $obj->getComportementMt());
		$q->bindValue(":evalComportement", $obj->getEvalComportement());
		$q->bindValue(":libelleAcquis1", $obj->getLibelleAcquis1());
		$q->bindValue(":libelleAcquis2", $obj->getLibelleAcquis2());
		$q->bindValue(":libelleAcquis3", $obj->getLibelleAcquis3());
		$q->bindValue(":libelleAcquis4", $obj->getLibelleAcquis4());
		$q->bindValue(":libelleAcquis5", $obj->getLibelleAcquis5());
		$q->bindValue(":libelleAcquis6", $obj->getLibelleAcquis6());
		$q->bindValue(":libelleAcquis7", $obj->getLibelleAcquis7());
		$q->bindValue(":libelleAcquis8", $obj->getLibelleAcquis8());
		$q->bindValue(":libelleAcquis9", $obj->getLibelleAcquis9());
		$q->bindValue(":libelleAcquis10", $obj->getLibelleAcquis10());
		$q->bindValue(":acquis1", $obj->getAcquis1());
		$q->bindValue(":acquis2", $obj->getAcquis2());
		$q->bindValue(":acquis3", $obj->getAcquis3());
		$q->bindValue(":acquis4", $obj->getAcquis4());
		$q->bindValue(":acquis5", $obj->getAcquis5());
		$q->bindValue(":acquis6", $obj->getAcquis6());
		$q->bindValue(":acquis7", $obj->getAcquis7());
		$q->bindValue(":acquis8", $obj->getAcquis8());
		$q->bindValue(":acquis9", $obj->getAcquis9());
		$q->bindValue(":acquis10", $obj->getAcquis10());
		$q->execute();
	}
	public static function delete(Evaluations $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Evaluations WHERE idStage=" .$obj->getIdStage());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Evaluations WHERE idStage =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Evaluations($results);
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
		$q = $db->query("SELECT * FROM Evaluations");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Evaluations($donnees);
			}
		}
		return $liste;
	}
}