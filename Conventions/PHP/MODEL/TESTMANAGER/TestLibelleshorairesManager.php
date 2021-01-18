<?php

//Test LibelleshorairesManager

echo "recherche id = 1" . "<br>";
$obj =LibelleshorairesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Libelleshoraires(["ordreHoraire" => "([value 1])", "libelleHoraire" => "([value 2])"]);
var_dump(LibelleshorairesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = LibelleshorairesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setordreHoraire("[(Value)]");
LibelleshorairesManager::update($obj);
$objUpdated = LibelleshorairesManager::findById(1);
echo "Liste des objets" . "<br>";
$array = LibelleshorairesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = LibelleshorairesManager::findById(1);
LibelleshorairesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = LibelleshorairesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>