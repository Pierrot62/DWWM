<?php

//Test SessionformationManager

echo "recherche id = 1" . "<br>";
$obj =SessionformationManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Sessionformation(["numOffreFormation" => "([value 1])", "objectifPAE" => "([value 2])", "dateRapportSuivi" => "([value 3])", "idFormation" => "([value 4])"]);
var_dump(SessionformationManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = SessionformationManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setnumOffreFormation("[(Value)]");
SessionformationManager::update($obj);
$objUpdated = SessionformationManager::findById(1);
echo "Liste des objets" . "<br>";
$array = SessionformationManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = SessionformationManager::findById(1);
SessionformationManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = SessionformationManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>