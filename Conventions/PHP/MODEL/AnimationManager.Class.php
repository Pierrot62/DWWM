<?php

class AnimationManager 
{
	public static function add(Animation $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Animation (idUtilisateur,idFormation) VALUES (:idUtilisateur,:idFormation)");
		$q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
		$q->bindValue(":idFormation", $obj->getIdFormation());
		$q->execute();
	}

	public static function update(Animation $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Animation SET idAnimation=:idAnimation,idUtilisateur=:idUtilisateur,idFormation=:idFormation WHERE idAnimation=:idAnimation");
		$q->bindValue(":idAnimation", $obj->getIdAnimation());
		$q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
		$q->bindValue(":idFormation", $obj->getIdFormation());
		$q->execute();
	}
	public static function delete(Animation $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Animation WHERE idAnimation=" .$obj->getIdAnimation());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Animation WHERE idAnimation =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Animation($results);
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
		$q = $db->query("SELECT * FROM Animation");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Animation($donnees);
			}
		}
		return $liste;
	}
}