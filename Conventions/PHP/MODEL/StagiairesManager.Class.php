<?php

class StagiairesManager 
{
	public static function add(Stagiaires $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Stagiaires (genreStagiaire,nomStagiaire,prenomStagiaire,numSecuStagiaire,numBenefStagiaire,dateNaissanceStagiaire) VALUES (:genreStagiaire,:nomStagiaire,:prenomStagiaire,:numSecuStagiaire,:numBenefStagiaire,:dateNaissanceStagiaire)");
		$q->bindValue(":genreStagiaire", $obj->getGenreStagiaire());
		$q->bindValue(":nomStagiaire", $obj->getNomStagiaire());
		$q->bindValue(":prenomStagiaire", $obj->getPrenomStagiaire());
		$q->bindValue(":numSecuStagiaire", $obj->getNumSecuStagiaire());
		$q->bindValue(":numBenefStagiaire", $obj->getNumBenefStagiaire());
		$q->bindValue(":dateNaissanceStagiaire", $obj->getDateNaissanceStagiaire());
		$q->execute();
	}

	public static function update(Stagiaires $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Stagiaires SET idStagiaire=:idStagiaire,genreStagiaire=:genreStagiaire,nomStagiaire=:nomStagiaire,prenomStagiaire=:prenomStagiaire,numSecuStagiaire=:numSecuStagiaire,numBenefStagiaire=:numBenefStagiaire,dateNaissanceStagiaire=:dateNaissanceStagiaire WHERE idStagiaire=:idStagiaire");
		$q->bindValue(":idStagiaire", $obj->getIdStagiaire());
		$q->bindValue(":genreStagiaire", $obj->getGenreStagiaire());
		$q->bindValue(":nomStagiaire", $obj->getNomStagiaire());
		$q->bindValue(":prenomStagiaire", $obj->getPrenomStagiaire());
		$q->bindValue(":numSecuStagiaire", $obj->getNumSecuStagiaire());
		$q->bindValue(":numBenefStagiaire", $obj->getNumBenefStagiaire());
		$q->bindValue(":dateNaissanceStagiaire", $obj->getDateNaissanceStagiaire());
		$q->execute();
	}
	public static function delete(Stagiaires $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Stagiaires WHERE idStagiaire=" .$obj->getIdStagiaire());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Stagiaires WHERE idStagiaire =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Stagiaires($results);
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
		$q = $db->query("SELECT * FROM Stagiaires");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Stagiaires($donnees);
			}
		}
		return $liste;
	}
	
	public static function getByNumBenefStagiaire($numBenefStagiaire)
    {
        $db = DbConnect::getDb();
        $num = (int) $numBenefStagiaire;
        $liste = [];
        $q = $db->query("SELECT * FROM Stagiaires where numBenefStagiaire=".$num);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new Stagiaires($donnees);
            }
        }return $liste;

	}
}