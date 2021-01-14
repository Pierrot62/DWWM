<?php

//Test LibellehorairesManager

echo "recherche id = 1" . "<br>";
$obj =LibellehorairesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Libellehoraires(["ordreHoraire" => "([value 1])", "libelleHoraire" => "([value 2])"]);
var_dump(LibellehorairesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = LibellehorairesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setordreHoraire("[(Value)]");
LibellehorairesManager::update($obj);
$objUpdated = LibellehorairesManager::findById(1);
echo "Liste des objets" . "<br>";
$array = LibellehorairesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = LibellehorairesManager::findById(1);
LibellehorairesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = LibellehorairesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>