<?php

//Test VillesManager

echo "recherche id = 1" . "<br>";
$obj =VillesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Villes(["idDepartement" => "([value 1])", "nomVille" => "([value 2])", "codePostal" => "([value 3])"]);
var_dump(VillesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = VillesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setidDepartement("[(Value)]");
VillesManager::update($obj);
$objUpdated = VillesManager::findById(1);
echo "Liste des objets" . "<br>";
$array = VillesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = VillesManager::findById(1);
VillesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = VillesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>