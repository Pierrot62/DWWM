<?php

class SessionsFormationsManager 
{
	public static function add(Sessionsformations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Sessionsformations (numOffreFormation,idFormation,dateDebut,dateFin) VALUES (:numOffreFormation,:idFormation,:dateDebut,:dateFin)");
		$q->bindValue(":numOffreFormation", $obj->getNumOffreFormation());
		$q->bindValue(":idFormation", $obj->getIdFormation());
		$q->bindValue(":dateDebut", $obj->getDateDebut());
		$q->bindValue(":dateFin", $obj->getDateFin());
		$q->execute();
	}

	public static function update(Sessionsformations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Sessionsformations SET idSessionFormation=:idSessionFormation,numOffreFormation=:numOffreFormation,idFormation=:idFormation,dateDebut=:dateDebut,dateFin=:dateFin WHERE idSessionFormation=:idSessionFormation");
		$q->bindValue(":idSessionFormation", $obj->getIdSessionFormation());
		$q->bindValue(":numOffreFormation", $obj->getNumOffreFormation());
		$q->bindValue(":idFormation", $obj->getIdFormation());
		$q->bindValue(":dateDebut", $obj->getDateDebut());
		$q->bindValue(":dateFin", $obj->getDateFin());
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
	public static function getByFormation($idFormation,$api)
    {
        $db = DbConnect::getDb();
        $id = (int) $idFormation;
		$liste = [];
		$json=[];
        $q = $db->query("SELECT * FROM SessionsFormations where idFormation=".$id);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
				$liste[] = new SessionsFormations($donnees);
				$json[]=$donnees;
            }
		}
		if(!$api) return $liste;
		return $json;
	}
	public static function getByNumOffre($numOffre)
    {
        $db = DbConnect::getDb();
        $numOffreRech = (int) $numOffre;
        $q = $db->query("SELECT `idSessionFormation` FROM `sessionsformations` WHERE `numOffreFormation`=$numOffreRech");

        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        $liste = new SessionsFormations($donnees);

        return $liste;
    }
}