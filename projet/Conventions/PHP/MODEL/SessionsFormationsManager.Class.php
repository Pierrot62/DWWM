<?php

class SessionsFormationsManager 
{
	public static function add(Sessionsformations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Sessionsformations (numOffreFormation,idFormation) VALUES (:numOffreFormation,:idFormation)");
		$q->bindValue(":numOffreFormation", $obj->getNumOffreFormation());
		$q->bindValue(":idFormation", $obj->getIdFormation());
		$q->execute();
	}

	public static function update(Sessionsformations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Sessionsformations SET idSessionFormation=:idSessionFormation,numOffreFormation=:numOffreFormation,idFormation=:idFormation WHERE idSessionFormation=:idSessionFormation");
		$q->bindValue(":idSessionFormation", $obj->getIdSessionFormation());
		$q->bindValue(":numOffreFormation", $obj->getNumOffreFormation());
		$q->bindValue(":idFormation", $obj->getIdFormation());
		$q->execute();
	}
	public static function delete(Sessionsformations $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Sessionsformations WHERE idSessionFormation=" .$obj->getIdSessionFormation());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Sessionsformations WHERE idSessionFormation =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Sessionsformations($results);
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
		$q = $db->query("SELECT * FROM Sessionsformations");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Sessionsformations($donnees);
			}
		}
		return $liste;
	}
	public static function getByFormation($idFormation)
    {
        $db = DbConnect::getDb();
        $id = (int) $idFormation;
        $liste = [];
        $q = $db->query("SELECT * FROM SessionsFormations where idFormation=$id");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new SessionsFormations($donnees);
            }
        }return $liste;

	}
}