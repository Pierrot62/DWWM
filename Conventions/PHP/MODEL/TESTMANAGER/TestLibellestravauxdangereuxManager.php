<?php

//Test LibellestravauxdangereuxManager

echo "recherche id = 1" . "<br>";
$obj =LibellestravauxdangereuxManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Libellestravauxdangereux(["ordreTravaux" => "([value 1])", "libelleTravaux" => "([value 2])"]);
var_dump(LibellestravauxdangereuxManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = LibellestravauxdangereuxManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setordreTravaux("[(Value)]");
LibellestravauxdangereuxManager::update($obj);
$objUpdated = LibellestravauxdangereuxManager::findById(1);
echo "Liste des objets" . "<br>";
$array = LibellestravauxdangereuxManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = LibellestravauxdangereuxManager::findById(1);
LibellestravauxdangereuxManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = LibellestravauxdangereuxManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>