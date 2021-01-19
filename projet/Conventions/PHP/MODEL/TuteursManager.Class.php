<?php

class TuteursManager 
{
	public static function add(Tuteurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Tuteurs (nomTuteur,prenomTuteur,fonctionTuteur,telTuteur,emailTuteur,idEntreprise) VALUES (:nomTuteur,:prenomTuteur,:fonctionTuteur,:telTuteur,:emailTuteur,:idEntreprise)");
		$q->bindValue(":nomTuteur", $obj->getNomTuteur());
		$q->bindValue(":prenomTuteur", $obj->getPrenomTuteur());
		$q->bindValue(":fonctionTuteur", $obj->getFonctionTuteur());
		$q->bindValue(":telTuteur", $obj->getTelTuteur());
		$q->bindValue(":emailTuteur", $obj->getEmailTuteur());
		$q->bindValue(":idEntreprise", $obj->getIdEntreprise());
		$q->execute();
	}

	public static function update(Tuteurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Tuteurs SET idTuteur=:idTuteur,nomTuteur=:nomTuteur,prenomTuteur=:prenomTuteur,fonctionTuteur=:fonctionTuteur,telTuteur=:telTuteur,emailTuteur=:emailTuteur,idEntreprise=:idEntreprise WHERE idTuteur=:idTuteur");
		$q->bindValue(":idTuteur", $obj->getIdTuteur());
		$q->bindValue(":nomTuteur", $obj->getNomTuteur());
		$q->bindValue(":prenomTuteur", $obj->getPrenomTuteur());
		$q->bindValue(":fonctionTuteur", $obj->getFonctionTuteur());
		$q->bindValue(":telTuteur", $obj->getTelTuteur());
		$q->bindValue(":emailTuteur", $obj->getEmailTuteur());
		$q->bindValue(":idEntreprise", $obj->getIdEntreprise());
		$q->execute();
	}
	public static function delete(Tuteurs $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Tuteurs WHERE idTuteur=" .$obj->getIdTuteur());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Tuteurs WHERE idTuteur =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Tuteurs($results);
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
		$q = $db->query("SELECT * FROM Tuteurs");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Tuteurs($donnees);
			}
		}
		return $liste;
	}
	public static function getByEmail($email)
	{
 		$db=DbConnect::getDb();
		$q=$db->query("SELECT * FROM Tuteurs WHERE emailTuteur =".$email);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Tuteurs($results);
		}
		else
		{
			return false;
		}
	}
	public static function getByEntreprise($idEntreprise)
	{
 		$db=DbConnect::getDb();
		$q=$db->query("SELECT * FROM Tuteurs WHERE idEntreprise =".$idEntreprise);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Tuteurs($results);
		}
		else
		{
			return false;
		}
	}
}