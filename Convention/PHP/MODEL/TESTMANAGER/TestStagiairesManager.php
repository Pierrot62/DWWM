<?php

//Test StagiairesManager

echo "recherche id = 1" . "<br>";
$obj =StagiairesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Stagiaires(["genreStagiaire" => "([value 1])", "nomStagiaire" => "([value 2])", "prenomStagiaire" => "([value 3])", "numSecuStagiaire" => "([value 4])", "numBenefStagiaire" => "([value 5])", "dateNaissanceStagiaire" => "([value 6])"]);
var_dump(StagiairesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = StagiairesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setgenreStagiaire("[(Value)]");
StagiairesManager::update($obj);
$objUpdated = StagiairesManager::findById(1);
echo "Liste des objets" . "<br>";
$array = StagiairesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = StagiairesManager::findById(1);
StagiairesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = StagiairesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>