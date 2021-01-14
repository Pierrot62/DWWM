<?php

//Test LibellecomportementsprofessionnelsManager

echo "recherche id = 1" . "<br>";
$obj =LibellecomportementsprofessionnelsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Libellecomportementsprofessionnels(["ordreComportement" => "([value 1])", "libelleComportement" => "([value 2])"]);
var_dump(LibellecomportementsprofessionnelsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = LibellecomportementsprofessionnelsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setordreComportement("[(Value)]");
LibellecomportementsprofessionnelsManager::update($obj);
$objUpdated = LibellecomportementsprofessionnelsManager::findById(1);
echo "Liste des objets" . "<br>";
$array = LibellecomportementsprofessionnelsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = LibellecomportementsprofessionnelsManager::findById(1);
LibellecomportementsprofessionnelsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = LibellecomportementsprofessionnelsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>