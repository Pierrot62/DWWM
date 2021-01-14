<?php

//Test TuteursManager

echo "recherche id = 1" . "<br>";
$obj =TuteursManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Tuteurs(["nomTuteur" => "([value 1])", "prenomTuteur" => "([value 2])", "fonctionTuteur" => "([value 3])", "telTuteur" => "([value 4])", "mailTuteur" => "([value 5])", "idEntreprise" => "([value 6])"]);
var_dump(TuteursManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = TuteursManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setnomTuteur("[(Value)]");
TuteursManager::update($obj);
$objUpdated = TuteursManager::findById(1);
echo "Liste des objets" . "<br>";
$array = TuteursManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = TuteursManager::findById(1);
TuteursManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = TuteursManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>