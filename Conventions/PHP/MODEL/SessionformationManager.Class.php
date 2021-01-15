<?php

class SessionformationManager 
{
	public static function add(Sessionformation $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Sessionformation (numOffreFormation,objectifPAE,dateRapportSuivi,idFormation) VALUES (:numOffreFormation,:objectifPAE,:dateRapportSuivi,:idFormation)");
		$q->bindValue(":numOffreFormation", $obj->getNumOffreFormation());
		$q->bindValue(":objectifPAE", $obj->getObjectifPAE());
		$q->bindValue(":dateRapportSuivi", $obj->getDateRapportSuivi());
		$q->bindValue(":idFormation", $obj->getIdFormation());
		$q->execute();
	}

	public static function update(Sessionformation $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Sessionformation SET idSessionFormation=:idSessionFormation,numOffreFormation=:numOffreFormation,objectifPAE=:objectifPAE,dateRapportSuivi=:dateRapportSuivi,idFormation=:idFormation WHERE idSessionFormation=:idSessionFormation");
		$q->bindValue(":idSessionFormation", $obj->getIdSessionFormation());
		$q->bindValue(":numOffreFormation", $obj->getNumOffreFormation());
		$q->bindValue(":objectifPAE", $obj->getObjectifPAE());
		$q->bindValue(":dateRapportSuivi", $obj->getDateRapportSuivi());
		$q->bindValue(":idFormation", $obj->getIdFormation());
		$q->execute();
	}
	public static function delete(Sessionformation $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Sessionformation WHERE idSessionFormation=" .$obj->getIdSessionFormation());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Sessionformation WHERE idSessionFormation =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Sessionformation($results);
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
		$q = $db->query("SELECT * FROM Sessionformation");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Sessionformation($donnees);
			}
		}
		return $liste;
	}
	
    public static function getByFormation($idFormation)
    {
        $db = DbConnect::getDb();
        $id = (int) $idFormation;
        $liste = [];
        $q = $db->query("SELECT * FROM Sessionformation where idFormation=$id");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new Sessionformation($donnees);
            }
        }return $liste;

	}
}