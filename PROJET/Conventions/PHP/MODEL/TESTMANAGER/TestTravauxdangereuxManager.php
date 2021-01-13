<?php

//Test TravauxdangereuxManager

echo "recherche id = 1" . "<br>";
$obj =TravauxdangereuxManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Travauxdangereux(["ordreTravaux" => "([value 1])", "libelleTravaux" => "([value 2])"]);
var_dump(TravauxdangereuxManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = TravauxdangereuxManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setordreTravaux("[(Value)]");
TravauxdangereuxManager::update($obj);
$objUpdated = TravauxdangereuxManager::findById(1);
echo "Liste des objets" . "<br>";
$array = TravauxdangereuxManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = TravauxdangereuxManager::findById(1);
TravauxdangereuxManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = TravauxdangereuxManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>