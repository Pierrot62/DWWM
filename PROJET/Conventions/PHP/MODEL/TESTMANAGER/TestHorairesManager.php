<?php

//Test HorairesManager

echo "recherche id = 1" . "<br>";
$obj =HorairesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Horaires(["dateDebutStage" => "([value 1])", "dateFinStage" => "([value 2])", "horaireDebutJour1" => "([value 3])", "horaireDebutJour2" => "([value 4])", "horaireDebutJour3" => "([value 5])", "horaireDebutJour4" => "([value 6])", "horaireDebutJour5" => "([value 7])", "horaireDebutJour6" => "([value 8])", "horaireFinJour1" => "([value 9])", "horaireFinJour2" => "([value 10])", "horaireFinJour3" => "([value 11])", "horaireFinJour4" => "([value 12])", "horaireFinJour5" => "([value 13])", "horaireFinJour6" => "([value 14])", "horaireDebutDej1" => "([value 15])", "horaireDebutDej2" => "([value 16])", "horaireDebutDej3" => "([value 17])", "horaireDebutDej4" => "([value 18])", "horaireDebutDej5" => "([value 19])", "horaireDebutDej6" => "([value 20])", "horaireFinDej1" => "([value 21])", "horaireFinDej2" => "([value 22])", "horaireFinDej3" => "([value 23])", "horaireFinDej4" => "([value 24])", "horaireFinDej5" => "([value 25])", "horaireFinDej6" => "([value 26])"]);
var_dump(HorairesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = HorairesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setdateDebutStage("[(Value)]");
HorairesManager::update($obj);
$objUpdated = HorairesManager::findById(1);
echo "Liste des objets" . "<br>";
$array = HorairesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = HorairesManager::findById(1);
HorairesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = HorairesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>