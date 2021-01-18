<?php

//Test ValeurshorairesManager

echo "recherche id = 1" . "<br>";
$obj =ValeurshorairesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Valeurshoraires(["idStage" => "([value 1])", "idLibelleHoraire" => "([value 2])", "valeurHoraire" => "([value 3])"]);
var_dump(ValeurshorairesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = ValeurshorairesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setidStage("[(Value)]");
ValeurshorairesManager::update($obj);
$objUpdated = ValeurshorairesManager::findById(1);
echo "Liste des objets" . "<br>";
$array = ValeurshorairesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = ValeurshorairesManager::findById(1);
ValeurshorairesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = ValeurshorairesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>