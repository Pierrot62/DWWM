<?php

//Test AnimationManager

echo "recherche id = 1" . "<br>";
$obj =AnimationManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Animation(["idUtilisateur" => "([value 1])", "idFormation" => "([value 2])"]);
var_dump(AnimationManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = AnimationManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setidUtilisateur("[(Value)]");
AnimationManager::update($obj);
$objUpdated = AnimationManager::findById(1);
echo "Liste des objets" . "<br>";
$array = AnimationManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = AnimationManager::findById(1);
AnimationManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = AnimationManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>