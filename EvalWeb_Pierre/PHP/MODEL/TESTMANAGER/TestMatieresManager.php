<?php

//Test MatieresManager

echo "recherche id = 1" . "<br>";
$obj =MatieresManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Matieres(["LibelleMatiere" => "([value 1])"]);
var_dump(MatieresManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = MatieresManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setLibelleMatiere("[(Value)]");
MatieresManager::update($obj);
$objUpdated = MatieresManager::findById(1);
echo "Liste des objets" . "<br>";
$array = MatieresManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = MatieresManager::findById(1);
MatieresManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = MatieresManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>