<?php

class VillesManager 
{
	public static function add(Villes $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Villes (nomVille,codePostal,idDepartement) VALUES (:nomVille,:codePostal,:idDepartement)");
		$q->bindValue(":nomVille", $obj->getNomVille());
		$q->bindValue(":codePostal", $obj->getCodePostal());
		$q->bindValue(":idDepartement", $obj->getIdDepartement());
		$q->execute();
	}

	public static function update(Villes $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Villes SET idVille=:idVille,nomVille=:nomVille,codePostal=:codePostal,idDepartement=:idDepartement WHERE idVille=:idVille");
		$q->bindValue(":idVille", $obj->getIdVille());
		$q->bindValue(":nomVille", $obj->getNomVille());
		$q->bindValue(":codePostal", $obj->getCodePostal());
		$q->bindValue(":idDepartement", $obj->getIdDepartement());
		$q->execute();
	}
	public static function delete(Villes $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Villes WHERE idVille=" .$obj->getIdVille());
	}
	public static function findById($id,$api)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Villes WHERE idVille =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			if($api)
			{
				return $results;
			}
			else{
				return new Villes($results);
			}
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
		$q = $db->query("SELECT * FROM Villes");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Villes($donnees);
			}
		}
		return $liste;
	}
	public static function getListByDepartement($idDepartement,$api)
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$json = [];
		$q = $db->query("SELECT * FROM Villes WHERE idDepartement ='".$idDepartement ."' ORDER BY nomVille");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Villes($donnees);
				$json[]= $donnees;
			}
		}
		if ($api) return $json;
		return $liste;
	}
}