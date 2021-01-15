<?php

class HorairesManager 
{
	public static function add(Horaires $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Horaires (dateDebutStage,dateFinStage,horaireDebutJour1,horaireDebutJour2,horaireDebutJour3,horaireDebutJour4,horaireDebutJour5,horaireDebutJour6,horaireFinJour1,horaireFinJour2,horaireFinJour3,horaireFinJour4,horaireFinJour5,horaireFinJour6,horaireDebutDej1,horaireDebutDej2,horaireDebutDej3,horaireDebutDej4,horaireDebutDej5,horaireDebutDej6,horaireFinDej1,horaireFinDej2,horaireFinDej3,horaireFinDej4,horaireFinDej5,horaireFinDej6) VALUES (:dateDebutStage,:dateFinStage,:horaireDebutJour1,:horaireDebutJour2,:horaireDebutJour3,:horaireDebutJour4,:horaireDebutJour5,:horaireDebutJour6,:horaireFinJour1,:horaireFinJour2,:horaireFinJour3,:horaireFinJour4,:horaireFinJour5,:horaireFinJour6,:horaireDebutDej1,:horaireDebutDej2,:horaireDebutDej3,:horaireDebutDej4,:horaireDebutDej5,:horaireDebutDej6,:horaireFinDej1,:horaireFinDej2,:horaireFinDej3,:horaireFinDej4,:horaireFinDej5,:horaireFinDej6)");
		$q->bindValue(":dateDebutStage", $obj->getDateDebutStage());
		$q->bindValue(":dateFinStage", $obj->getDateFinStage());
		$q->bindValue(":horaireDebutJour1", $obj->getHoraireDebutJour1());
		$q->bindValue(":horaireDebutJour2", $obj->getHoraireDebutJour2());
		$q->bindValue(":horaireDebutJour3", $obj->getHoraireDebutJour3());
		$q->bindValue(":horaireDebutJour4", $obj->getHoraireDebutJour4());
		$q->bindValue(":horaireDebutJour5", $obj->getHoraireDebutJour5());
		$q->bindValue(":horaireDebutJour6", $obj->getHoraireDebutJour6());
		$q->bindValue(":horaireFinJour1", $obj->getHoraireFinJour1());
		$q->bindValue(":horaireFinJour2", $obj->getHoraireFinJour2());
		$q->bindValue(":horaireFinJour3", $obj->getHoraireFinJour3());
		$q->bindValue(":horaireFinJour4", $obj->getHoraireFinJour4());
		$q->bindValue(":horaireFinJour5", $obj->getHoraireFinJour5());
		$q->bindValue(":horaireFinJour6", $obj->getHoraireFinJour6());
		$q->bindValue(":horaireDebutDej1", $obj->getHoraireDebutDej1());
		$q->bindValue(":horaireDebutDej2", $obj->getHoraireDebutDej2());
		$q->bindValue(":horaireDebutDej3", $obj->getHoraireDebutDej3());
		$q->bindValue(":horaireDebutDej4", $obj->getHoraireDebutDej4());
		$q->bindValue(":horaireDebutDej5", $obj->getHoraireDebutDej5());
		$q->bindValue(":horaireDebutDej6", $obj->getHoraireDebutDej6());
		$q->bindValue(":horaireFinDej1", $obj->getHoraireFinDej1());
		$q->bindValue(":horaireFinDej2", $obj->getHoraireFinDej2());
		$q->bindValue(":horaireFinDej3", $obj->getHoraireFinDej3());
		$q->bindValue(":horaireFinDej4", $obj->getHoraireFinDej4());
		$q->bindValue(":horaireFinDej5", $obj->getHoraireFinDej5());
		$q->bindValue(":horaireFinDej6", $obj->getHoraireFinDej6());
		$q->execute();
	}

	public static function update(Horaires $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Horaires SET idStage=:idStage,dateDebutStage=:dateDebutStage,dateFinStage=:dateFinStage,horaireDebutJour1=:horaireDebutJour1,horaireDebutJour2=:horaireDebutJour2,horaireDebutJour3=:horaireDebutJour3,horaireDebutJour4=:horaireDebutJour4,horaireDebutJour5=:horaireDebutJour5,horaireDebutJour6=:horaireDebutJour6,horaireFinJour1=:horaireFinJour1,horaireFinJour2=:horaireFinJour2,horaireFinJour3=:horaireFinJour3,horaireFinJour4=:horaireFinJour4,horaireFinJour5=:horaireFinJour5,horaireFinJour6=:horaireFinJour6,horaireDebutDej1=:horaireDebutDej1,horaireDebutDej2=:horaireDebutDej2,horaireDebutDej3=:horaireDebutDej3,horaireDebutDej4=:horaireDebutDej4,horaireDebutDej5=:horaireDebutDej5,horaireDebutDej6=:horaireDebutDej6,horaireFinDej1=:horaireFinDej1,horaireFinDej2=:horaireFinDej2,horaireFinDej3=:horaireFinDej3,horaireFinDej4=:horaireFinDej4,horaireFinDej5=:horaireFinDej5,horaireFinDej6=:horaireFinDej6 WHERE idStage=:idStage");
		$q->bindValue(":idStage", $obj->getIdStage());
		$q->bindValue(":dateDebutStage", $obj->getDateDebutStage());
		$q->bindValue(":dateFinStage", $obj->getDateFinStage());
		$q->bindValue(":horaireDebutJour1", $obj->getHoraireDebutJour1());
		$q->bindValue(":horaireDebutJour2", $obj->getHoraireDebutJour2());
		$q->bindValue(":horaireDebutJour3", $obj->getHoraireDebutJour3());
		$q->bindValue(":horaireDebutJour4", $obj->getHoraireDebutJour4());
		$q->bindValue(":horaireDebutJour5", $obj->getHoraireDebutJour5());
		$q->bindValue(":horaireDebutJour6", $obj->getHoraireDebutJour6());
		$q->bindValue(":horaireFinJour1", $obj->getHoraireFinJour1());
		$q->bindValue(":horaireFinJour2", $obj->getHoraireFinJour2());
		$q->bindValue(":horaireFinJour3", $obj->getHoraireFinJour3());
		$q->bindValue(":horaireFinJour4", $obj->getHoraireFinJour4());
		$q->bindValue(":horaireFinJour5", $obj->getHoraireFinJour5());
		$q->bindValue(":horaireFinJour6", $obj->getHoraireFinJour6());
		$q->bindValue(":horaireDebutDej1", $obj->getHoraireDebutDej1());
		$q->bindValue(":horaireDebutDej2", $obj->getHoraireDebutDej2());
		$q->bindValue(":horaireDebutDej3", $obj->getHoraireDebutDej3());
		$q->bindValue(":horaireDebutDej4", $obj->getHoraireDebutDej4());
		$q->bindValue(":horaireDebutDej5", $obj->getHoraireDebutDej5());
		$q->bindValue(":horaireDebutDej6", $obj->getHoraireDebutDej6());
		$q->bindValue(":horaireFinDej1", $obj->getHoraireFinDej1());
		$q->bindValue(":horaireFinDej2", $obj->getHoraireFinDej2());
		$q->bindValue(":horaireFinDej3", $obj->getHoraireFinDej3());
		$q->bindValue(":horaireFinDej4", $obj->getHoraireFinDej4());
		$q->bindValue(":horaireFinDej5", $obj->getHoraireFinDej5());
		$q->bindValue(":horaireFinDej6", $obj->getHoraireFinDej6());
		$q->execute();
	}
	public static function delete(Horaires $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Horaires WHERE idStage=" .$obj->getIdStage());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Horaires WHERE idStage =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Horaires($results);
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
		$q = $db->query("SELECT * FROM Horaires");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Horaires($donnees);
			}
		}
		return $liste;
	}
}