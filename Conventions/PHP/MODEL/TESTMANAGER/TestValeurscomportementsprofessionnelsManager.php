<?php

//Test ValeurscomportementsprofessionnelsManager

echo "recherche id = 1" . "<br>";
$obj =ValeurscomportementsprofessionnelsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Valeurscomportementsprofessionnels(["idStage" => "([value 1])", "idLibelleComportementProfessionnel" => "([value 2])", "valeurComportement" => "([value 3])"]);
var_dump(ValeurscomportementsprofessionnelsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = ValeurscomportementsprofessionnelsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setidStage("[(Value)]");
ValeurscomportementsprofessionnelsManager::update($obj);
$objUpdated = ValeurscomportementsprofessionnelsManager::findById(1);
echo "Liste des objets" . "<br>";
$array = ValeurscomportementsprofessionnelsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = ValeurscomportementsprofessionnelsManager::findById(1);
ValeurscomportementsprofessionnelsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = ValeurscomportementsprofessionnelsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>