<?php

class ParticipationsManager 
{
	public static function add(Participations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Participations (idSessionFormation,idStagiaire) VALUES (:idSessionFormation,:idStagiaire)");
		$q->bindValue(":idSessionFormation", $obj->getIdSessionFormation());
		$q->bindValue(":idStagiaire", $obj->getIdStagiaire());
		$q->execute();
	}

	public static function update(Participations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Participations SET idParticipation=:idParticipation,idSessionFormation=:idSessionFormation,idStagiaire=:idStagiaire WHERE idParticipation=:idParticipation");
		$q->bindValue(":idParticipation", $obj->getIdParticipation());
		$q->bindValue(":idSessionFormation", $obj->getIdSessionFormation());
		$q->bindValue(":idStagiaire", $obj->getIdStagiaire());
		$q->execute();
	}
	public static function delete(Participations $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Participations WHERE idParticipation=" .$obj->getIdParticipation());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Participations WHERE idParticipation =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Participations($results);
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
		$q = $db->query("SELECT * FROM Participations");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Participations($donnees);
			}
		}
		return $liste;
	}
	public static function getByStagiaire($idStagiaire)
    {
        $db = DbConnect::getDb();
        $id = (int) $idStagiaire;
        $liste = [];
        $q = $db->query("SELECT * FROM Participations where idStagiaire=".$id);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new Participations($donnees);
            }
        }return $liste;

	}
	public static function getBySessionStagiaire($idSession, $idStagiaire)
	{
 		$db=DbConnect::getDb();
		$q=$db->query("SELECT * FROM Participations WHERE idSessionFormation =".$idSession ." And idStagiaire=".$idStagiaire);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Participations($results);
		}
		else
		{
			return false;
		}
	}
}