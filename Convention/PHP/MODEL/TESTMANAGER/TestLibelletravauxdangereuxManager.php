<?php

//Test LibelletravauxdangereuxManager

echo "recherche id = 1" . "<br>";
$obj =LibelletravauxdangereuxManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Libelletravauxdangereux(["ordreTravaux" => "([value 1])", "libelleTravaux" => "([value 2])"]);
var_dump(LibelletravauxdangereuxManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = LibelletravauxdangereuxManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setordreTravaux("[(Value)]");
LibelletravauxdangereuxManager::update($obj);
$objUpdated = LibelletravauxdangereuxManager::findById(1);
echo "Liste des objets" . "<br>";
$array = LibelletravauxdangereuxManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = LibelletravauxdangereuxManager::findById(1);
LibelletravauxdangereuxManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = LibelletravauxdangereuxManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>