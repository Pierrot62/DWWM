<?php

//Test ValeurstravauxdangereuxManager

echo "recherche id = 1" . "<br>";
$obj =ValeurstravauxdangereuxManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Valeurstravauxdangereux(["idStage" => "([value 1])", "idLibelleTravauxDangereux" => "([value 2])", "valeurTravaux" => "([value 3])"]);
var_dump(ValeurstravauxdangereuxManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = ValeurstravauxdangereuxManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setidStage("[(Value)]");
ValeurstravauxdangereuxManager::update($obj);
$objUpdated = ValeurstravauxdangereuxManager::findById(1);
echo "Liste des objets" . "<br>";
$array = ValeurstravauxdangereuxManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = ValeurstravauxdangereuxManager::findById(1);
ValeurstravauxdangereuxManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = ValeurstravauxdangereuxManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>