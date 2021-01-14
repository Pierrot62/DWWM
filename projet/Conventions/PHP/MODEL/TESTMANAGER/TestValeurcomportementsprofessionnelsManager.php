<?php

//Test ValeurcomportementsprofessionnelsManager

echo "recherche id = 1" . "<br>";
$obj =ValeurcomportementsprofessionnelsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Valeurcomportementsprofessionnels(["idStage" => "([value 1])", "idLibelleComportementProfessionnel" => "([value 2])", "valeurComportement" => "([value 3])"]);
var_dump(ValeurcomportementsprofessionnelsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = ValeurcomportementsprofessionnelsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setidStage("[(Value)]");
ValeurcomportementsprofessionnelsManager::update($obj);
$objUpdated = ValeurcomportementsprofessionnelsManager::findById(1);
echo "Liste des objets" . "<br>";
$array = ValeurcomportementsprofessionnelsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = ValeurcomportementsprofessionnelsManager::findById(1);
ValeurcomportementsprofessionnelsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = ValeurcomportementsprofessionnelsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>