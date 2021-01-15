<?php

//Test ValeurtravauxdangereuxManager

echo "recherche id = 1" . "<br>";
$obj =ValeurtravauxdangereuxManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Valeurtravauxdangereux(["idStage" => "([value 1])", "idLibelleTravauxDangereux" => "([value 2])", "valeurTravaux" => "([value 3])"]);
var_dump(ValeurtravauxdangereuxManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = ValeurtravauxdangereuxManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setidStage("[(Value)]");
ValeurtravauxdangereuxManager::update($obj);
$objUpdated = ValeurtravauxdangereuxManager::findById(1);
echo "Liste des objets" . "<br>";
$array = ValeurtravauxdangereuxManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = ValeurtravauxdangereuxManager::findById(1);
ValeurtravauxdangereuxManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = ValeurtravauxdangereuxManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>