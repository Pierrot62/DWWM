<?php

class UserManager 
{
	public static function add(User $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO User (nomUser,prenomUser,mdpUser,roleUser,pseudoUser) VALUES (:nomUser,:prenomUser,:mdpUser,:roleUser,:pseudoUser)");
		$q->bindValue(":nomUser", $obj->getNomUser());
		$q->bindValue(":prenomUser", $obj->getPrenomUser());
		$q->bindValue(":mdpUser", $obj->getMdpUser());
		$q->bindValue(":roleUser", $obj->getRoleUser());
		$q->bindValue(":pseudoUser", $obj->getPseudoUser());
		$q->execute();
	}

	public static function update(User $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE User SET idUser=:idUser,nomUser=:nomUser,prenomUser=:prenomUser,mdpUser=:mdpUser,roleUser=:roleUser,pseudoUser=:pseudoUser WHERE idUser=:idUser");
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->bindValue(":nomUser", $obj->getNomUser());
		$q->bindValue(":prenomUser", $obj->getPrenomUser());
		$q->bindValue(":mdpUser", $obj->getMdpUser());
		$q->bindValue(":roleUser", $obj->getRoleUser());
		$q->bindValue(":pseudoUser", $obj->getPseudoUser());
		$q->execute();
	}
	public static function delete(User $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM User WHERE idUser=" .$obj->getIdUser());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM User WHERE idUser =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new User($results);
		}
		else
		{
			return false;
		}
	}

	public static function findByPseudo($pseudo)// recherche per pseudo utilisateur
    {
		$db = DbConnect::getDb();
            $q = $db->query("SELECT * FROM user WHERE pseudoUser ='" . $pseudo . "'");
            $results = $q->fetch(PDO::FETCH_ASSOC);
            if ($results != false)
            {
                return new User($results);
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
		$q = $db->query("SELECT * FROM User");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new User($donnees);
			}
		}
		return $liste;
	}
}