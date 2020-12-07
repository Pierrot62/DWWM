<?php

//Test UserManager

echo "recherche id = 1" . "<br>";
$obj =UserManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new User(["nomUser" => "([value 1])", "prenomUser" => "([value 2])", "mdpUser" => "([value 3])", "roleUser" => "([value 4])", "pseudoUser" => "([value 5])"]);
var_dump(UserManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = UserManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setnomUser("[(Value)]");
UserManager::update($obj);
$objUpdated = UserManager::findById(1);
echo "Liste des objets" . "<br>";
$array = UserManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = UserManager::findById(1);
UserManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = UserManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>