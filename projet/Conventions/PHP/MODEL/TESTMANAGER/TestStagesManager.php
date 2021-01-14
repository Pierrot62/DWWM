<?php

//Test StagesManager

echo "recherche id = 1" . "<br>";
$obj =StagesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Stages(["etape" => "([value 1])", "dateVisite" => "([value 2])", "nomVisiteur" => "([value 3])", "lieuRealisation" => "([value 4])", "deplacement" => "([value 5])", "frequenceDeplacement" => "([value 6])", "modeDeplacement" => "([value 7])", "attFormReglement" => "([value 8])", "libelleAttFormReg" => "([value 9])", "visiteMedical" => "([value 10])", "travauxDang" => "([value 11])", "dateDeclarationDerog" => "([value 12])", "sujetStage" => "([value 13])", "travauxRealises" => "([value 14])", "objectifPAE" => "([value 15])", "dateDebut" => "([value 16])", "dateFin" => "([value 17])", "idTuteur" => "([value 18])", "idStagiaire" => "([value 19])"]);
var_dump(StagesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = StagesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setetape("[(Value)]");
StagesManager::update($obj);
$objUpdated = StagesManager::findById(1);
echo "Liste des objets" . "<br>";
$array = StagesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = StagesManager::findById(1);
StagesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = StagesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>