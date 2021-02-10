<?php

class FormationsManager 
{
	public static function add(Formations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Formations (libelleFormation, grn, finaliteFormation) VALUES (:libelleFormation,:grn,:finaliteFormation)");
		$q->bindValue(":libelleFormation", $obj->getLibelleFormation());
		$q->bindValue(":grn", $obj->getGrn());
		$q->bindValue(":finaliteFormation", $obj->getFinaliteFormation());
		$q->execute();
	}

	public static function update(Formations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Formations SET idFormation=:idFormation,libelleFormation=:libelleFormation,grn=:grn,finaliteFormation=:finaliteFormation WHERE idFormation=:idFormation");
		$q->bindValue(":idFormation", $obj->getIdFormation());
		$q->bindValue(":libelleFormation", $obj->getLibelleFormation());
		$q->bindValue(":grn", $obj->getGrn());
		$q->bindValue(":finaliteFormation", $obj->getFinaliteFormation());
		$q->execute();
	}
	public static function delete(Formations $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Formations WHERE idFormation=" .$obj->getIdFormation());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Formations WHERE idFormation =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Formations($results);
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
		$q = $db->query("SELECT * FROM Formations  ORDER BY libelleFormation");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Formations($donnees);
			}
		}
		return $liste;
	}
	public static function getByLibelle($libelle)
	{
		$db=DbConnect::getDb();
	   $q=$db->query('SELECT * FROM Formations WHERE libelleFormation ="'.$libelle.'"');
	   $results = $q->fetch(PDO::FETCH_ASSOC);
	   if($results != false)
	   {
		   return new Formations($results);
	   }
	   else
	   {
		   return false;
	   }
   }
}