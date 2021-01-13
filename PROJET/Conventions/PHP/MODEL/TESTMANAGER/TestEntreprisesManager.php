<?php

//Test EntreprisesManager

echo "recherche id = 1" . "<br>";
$obj =EntreprisesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Entreprises(["raisonSociale" => "([value 1])", "statutJuridiqueEnt" => "([value 2])", "adresseEnt" => "([value 3])", "numSiretEnt" => "([value 4])", "indexSiret" => "([value 5])", "telEnt" => "([value 6])", "assureurEnt" => "([value 7])", "numSocietaire" => "([value 8])", "nomRepresentant" => "([value 9])", "prenomRepresentant" => "([value 10])", "fctRepresentant" => "([value 11])", "telRepresentant" => "([value 12])", "mailRepresentant" => "([value 13])", "idVille" => "([value 14])"]);
var_dump(EntreprisesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = EntreprisesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setraisonSociale("[(Value)]");
EntreprisesManager::update($obj);
$objUpdated = EntreprisesManager::findById(1);
echo "Liste des objets" . "<br>";
$array = EntreprisesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = EntreprisesManager::findById(1);
EntreprisesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = EntreprisesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>