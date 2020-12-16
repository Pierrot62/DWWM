<?php

class ElevesManager 
{
	public static function add(Eleves $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Eleves (NomEleve,PrenomEleve,Classe) VALUES (:NomEleve,:PrenomEleve,:Classe)");
		$q->bindValue(":NomEleve", $obj->getNomEleve());
		$q->bindValue(":PrenomEleve", $obj->getPrenomEleve());
		$q->bindValue(":Classe", $obj->getClasse());
		$q->execute();
	}

	public static function update(Eleves $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Eleves SET idEleve=:idEleve,NomEleve=:NomEleve,PrenomEleve=:PrenomEleve,Classe=:Classe WHERE idEleve=:idEleve");
		$q->bindValue(":idEleve", $obj->getIdEleve());
		$q->bindValue(":NomEleve", $obj->getNomEleve());
		$q->bindValue(":PrenomEleve", $obj->getPrenomEleve());
		$q->bindValue(":Classe", $obj->getClasse());
		$q->execute();
	}
	public static function delete(Eleves $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Eleves WHERE idEleve=" .$obj->getIdEleve());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Eleves WHERE idEleve =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Eleves($results);
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
		$q = $db->query("SELECT * FROM Eleves");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Eleves($donnees);
			}
		}
		return $liste;
	}
}