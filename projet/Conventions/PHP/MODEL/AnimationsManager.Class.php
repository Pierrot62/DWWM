<?php

class AnimationsManager 
{
	public static function add(Animations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Animations (idUtilisateur,idFormation) VALUES (:idUtilisateur,:idFormation)");
		$q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
		$q->bindValue(":idFormation", $obj->getIdFormation());
		$q->execute();
	}

	public static function update(Animations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Animations SET idAnimation=:idAnimation,idUtilisateur=:idUtilisateur,idFormation=:idFormation WHERE idAnimation=:idAnimation");
		$q->bindValue(":idAnimation", $obj->getIdAnimation());
		$q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
		$q->bindValue(":idFormation", $obj->getIdFormation());
		$q->execute();
	}
	public static function delete(Animations $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Animations WHERE idAnimation=" .$obj->getIdAnimation());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Animations WHERE idAnimation =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Animations($results);
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
		$q = $db->query("SELECT * FROM Animations");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Animations($donnees);
			}
		}
		return $liste;
	}
	public static function getByFormation($idFormation)
    {
        $db = DbConnect::getDb();
        $id = (int) $idFormation;
        $liste = [];
        $q = $db->query("SELECT * FROM Animations where idFormation=$id");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new Animations($donnees);
            }
        }return $liste;

	}
    public static function getByUtilisateur($idUtilisateur)
    {
        $db = DbConnect::getDb();
        $id = (int) $idUtilisateur;
        $liste = [];
        $q = $db->query("SELECT * FROM Animations where idUtilisateur=$id");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new Animations($donnees);
            }
        }return $liste;

	}
	public static function getByUtilisateurFormation($idUtilisateur, $idFormation)
	{
 		$db=DbConnect::getDb();
		$q=$db->query("SELECT * FROM Animations WHERE idUtilisateur =".$idUtilisateur ." AND idFormation=".$idFormation);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Animations($results);
		}
		else
		{
			return false;
		}
	}
}