<?php

//Test AnimationsManager

echo "recherche id = 1" . "<br>";
$obj =AnimationsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Animations(["idUtilisateur" => "([value 1])", "idFormation" => "([value 2])"]);
var_dump(AnimationsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = AnimationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setidUtilisateur("[(Value)]");
AnimationsManager::update($obj);
$objUpdated = AnimationsManager::findById(1);
echo "Liste des objets" . "<br>";
$array = AnimationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = AnimationsManager::findById(1);
AnimationsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = AnimationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>