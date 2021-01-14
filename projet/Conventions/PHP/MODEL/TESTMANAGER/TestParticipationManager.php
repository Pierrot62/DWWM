<?php

//Test ParticipationManager

echo "recherche id = 1" . "<br>";
$obj =ParticipationManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Participation(["dateDebut" => "([value 1])", "dateFin" => "([value 2])", "idSessionFormation" => "([value 3])", "idStagiaire" => "([value 4])"]);
var_dump(ParticipationManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = ParticipationManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setdateDebut("[(Value)]");
ParticipationManager::update($obj);
$objUpdated = ParticipationManager::findById(1);
echo "Liste des objets" . "<br>";
$array = ParticipationManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = ParticipationManager::findById(1);
ParticipationManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = ParticipationManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>