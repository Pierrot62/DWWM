<?php

class UtilisateurManager 
{
	public static function add(Utilisateur $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Utilisateur (Login,NomUtilisateur,PrenomUtilisateur,MotDePasse,Role,idMatieres) VALUES (:Login,:NomUtilisateur,:PrenomUtilisateur,:MotDePasse,:Role,:idMatieres)");
		$q->bindValue(":Login", $obj->getLogin());
		$q->bindValue(":NomUtilisateur", $obj->getNomUtilisateur());
		$q->bindValue(":PrenomUtilisateur", $obj->getPrenomUtilisateur());
		$q->bindValue(":MotDePasse", $obj->getMotDePasse());
		$q->bindValue(":Role", $obj->getRole());
		$q->bindValue(":idMatieres", $obj->getIdMatieres());
		$q->execute();
	}

	public static function update(Utilisateur $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Utilisateur SET IdUtilisateur=:IdUtilisateur,Login=:Login,NomUtilisateur=:NomUtilisateur,PrenomUtilisateur=:PrenomUtilisateur,MotDePasse=:MotDePasse,Role=:Role,idMatieres=:idMatieres WHERE IdUtilisateur=:IdUtilisateur");
		$q->bindValue(":IdUtilisateur", $obj->getIdUtilisateur());
		$q->bindValue(":Login", $obj->getLogin());
		$q->bindValue(":NomUtilisateur", $obj->getNomUtilisateur());
		$q->bindValue(":PrenomUtilisateur", $obj->getPrenomUtilisateur());
		$q->bindValue(":MotDePasse", $obj->getMotDePasse());
		$q->bindValue(":Role", $obj->getRole());
		$q->bindValue(":idMatieres", $obj->getIdMatieres());
		$q->execute();
	}
	public static function delete(Utilisateur $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Utilisateur WHERE IdUtilisateur=" .$obj->getIdUtilisateur());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Utilisateur WHERE IdUtilisateur =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Utilisateur($results);
		}
		else
		{
			return false;
		}
	}

	public static function findByPseudo($login)
	{
 		$db=DbConnect::getDb();
		$q=$db->query("SELECT * FROM Utilisateur WHERE login =\"".$login."\"");
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Utilisateur($results);
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
		$q = $db->query("SELECT * FROM Utilisateur");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Utilisateur($donnees);
			}
		}
		return $liste;
	}
}