<?php

//Test StagesManager

echo "recherche id = 1" . "<br>";
$obj =StagesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Stages(["dateVisite" => "([value 1])", "nomVisiteur" => "([value 2])", "lieuRealisation" => "([value 3])", "deplacement" => "([value 4])", "frequenceDeplacement" => "([value 5])", "modeDeplacement" => "([value 6])", "attFormReglement" => "([value 7])", "libelleAttFormReg" => "([value 8])", "visiteMedical" => "([value 9])", "travauxDang" => "([value 10])", "dateDeclarationDerog" => "([value 11])", "sujetStage" => "([value 12])", "travauxRealises" => "([value 13])", "satisfactionEnt" => "([value 14])", "remarqueEnt" => "([value 15])", "perspectiveEmb" => "([value 16])", "repTravauxDang1" => "([value 17])", "repTravauxDang2" => "([value 18])", "repTravauxDang3" => "([value 19])", "repTravauxDang4" => "([value 20])", "repTravauxDang5" => "([value 21])", "objectifPAE" => "([value 22])", "repTravauxDang6" => "([value 23])", "autreRepTravauxDang" => "([value 24])", "dateDebut" => "([value 25])", "dateFin" => "([value 26])", "idTuteur" => "([value 27])", "idStagiaire" => "([value 28])"]);
var_dump(StagesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = StagesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setdateVisite("[(Value)]");
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