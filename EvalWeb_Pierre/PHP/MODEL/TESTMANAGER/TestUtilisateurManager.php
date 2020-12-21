<?php

//Test UtilisateurManager

echo "recherche id = 1" . "<br>";
$obj =UtilisateurManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Utilisateur(["Login" => "([value 1])", "NomUtilisateur" => "([value 2])", "PrenomUtilisateur" => "([value 3])", "MotDePasse" => "([value 4])", "Role" => "([value 5])", "idMatieres" => "([value 6])"]);
var_dump(UtilisateurManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = UtilisateurManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setLogin("[(Value)]");
UtilisateurManager::update($obj);
$objUpdated = UtilisateurManager::findById(1);
echo "Liste des objets" . "<br>";
$array = UtilisateurManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = UtilisateurManager::findById(1);
UtilisateurManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = UtilisateurManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>