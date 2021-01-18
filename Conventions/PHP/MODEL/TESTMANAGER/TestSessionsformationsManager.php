<?php

//Test SessionsformationsManager

echo "recherche id = 1" . "<br>";
$obj =SessionsformationsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Sessionsformations(["numOffreFormation" => "([value 1])", "idFormation" => "([value 2])"]);
var_dump(SessionsformationsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = SessionsformationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setnumOffreFormation("[(Value)]");
SessionsformationsManager::update($obj);
$objUpdated = SessionsformationsManager::findById(1);
echo "Liste des objets" . "<br>";
$array = SessionsformationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = SessionsformationsManager::findById(1);
SessionsformationsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = SessionsformationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>