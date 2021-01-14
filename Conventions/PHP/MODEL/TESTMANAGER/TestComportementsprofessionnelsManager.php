<?php

//Test ComportementsprofessionnelsManager

echo "recherche id = 1" . "<br>";
$obj =ComportementsprofessionnelsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Comportementsprofessionnels(["ordreComportement" => "([value 1])", "libelleComportement" => "([value 2])"]);
var_dump(ComportementsprofessionnelsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = ComportementsprofessionnelsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setordreComportement("[(Value)]");
ComportementsprofessionnelsManager::update($obj);
$objUpdated = ComportementsprofessionnelsManager::findById(1);
echo "Liste des objets" . "<br>";
$array = ComportementsprofessionnelsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = ComportementsprofessionnelsManager::findById(1);
ComportementsprofessionnelsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = ComportementsprofessionnelsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>