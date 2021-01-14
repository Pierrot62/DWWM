<?php

class ParticipationManager 
{
	public static function add(Participation $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Participation (dateDebut,dateFin,idSessionFormation,idStagiaire) VALUES (:dateDebut,:dateFin,:idSessionFormation,:idStagiaire)");
		$q->bindValue(":dateDebut", $obj->getDateDebut());
		$q->bindValue(":dateFin", $obj->getDateFin());
		$q->bindValue(":idSessionFormation", $obj->getIdSessionFormation());
		$q->bindValue(":idStagiaire", $obj->getIdStagiaire());
		$q->execute();
	}

	public static function update(Participation $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Participation SET idParticipation=:idParticipation,dateDebut=:dateDebut,dateFin=:dateFin,idSessionFormation=:idSessionFormation,idStagiaire=:idStagiaire WHERE idParticipation=:idParticipation");
		$q->bindValue(":idParticipation", $obj->getIdParticipation());
		$q->bindValue(":dateDebut", $obj->getDateDebut());
		$q->bindValue(":dateFin", $obj->getDateFin());
		$q->bindValue(":idSessionFormation", $obj->getIdSessionFormation());
		$q->bindValue(":idStagiaire", $obj->getIdStagiaire());
		$q->execute();
	}
	public static function delete(Participation $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Participation WHERE idParticipation=" .$obj->getIdParticipation());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Participation WHERE idParticipation =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Participation($results);
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
		$q = $db->query("SELECT * FROM Participation");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Participation($donnees);
			}
		}
		return $liste;
	}
}