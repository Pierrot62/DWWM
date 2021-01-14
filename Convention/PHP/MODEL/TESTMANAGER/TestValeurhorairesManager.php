<?php

//Test ValeurhorairesManager

echo "recherche id = 1" . "<br>";
$obj =ValeurhorairesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Valeurhoraires(["idStage" => "([value 1])", "idLibelleHoraire" => "([value 2])", "valeurHoraire" => "([value 3])"]);
var_dump(ValeurhorairesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = ValeurhorairesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setidStage("[(Value)]");
ValeurhorairesManager::update($obj);
$objUpdated = ValeurhorairesManager::findById(1);
echo "Liste des objets" . "<br>";
$array = ValeurhorairesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = ValeurhorairesManager::findById(1);
ValeurhorairesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = ValeurhorairesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>