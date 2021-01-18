<?php

//Test ValeursacquisManager

echo "recherche id = 1" . "<br>";
$obj =ValeursacquisManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Valeursacquis(["idStage" => "([value 1])", "ordreAcquis" => "([value 2])", "libelleAcquis" => "([value 3])", "valeurAcquis" => "([value 4])"]);
var_dump(ValeursacquisManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = ValeursacquisManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setidStage("[(Value)]");
ValeursacquisManager::update($obj);
$objUpdated = ValeursacquisManager::findById(1);
echo "Liste des objets" . "<br>";
$array = ValeursacquisManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = ValeursacquisManager::findById(1);
ValeursacquisManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = ValeursacquisManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>