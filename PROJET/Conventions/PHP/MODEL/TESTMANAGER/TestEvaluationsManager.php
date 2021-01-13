<?php

//Test EvaluationsManager

echo "recherche id = 1" . "<br>";
$obj =EvaluationsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Evaluations(["dateEvaluation" => "([value 1])", "objectifAcquisition" => "([value 2])", "comportementMt" => "([value 3])", "evalComportement" => "([value 4])", "libelleAcquis1" => "([value 5])", "libelleAcquis2" => "([value 6])", "libelleAcquis3" => "([value 7])", "libelleAcquis4" => "([value 8])", "libelleAcquis5" => "([value 9])", "libelleAcquis6" => "([value 10])", "libelleAcquis7" => "([value 11])", "libelleAcquis8" => "([value 12])", "libelleAcquis9" => "([value 13])", "libelleAcquis10" => "([value 14])", "acquis1" => "([value 15])", "acquis2" => "([value 16])", "acquis3" => "([value 17])", "acquis4" => "([value 18])", "acquis5" => "([value 19])", "acquis6" => "([value 20])", "acquis7" => "([value 21])", "acquis8" => "([value 22])", "acquis9" => "([value 23])", "acquis10" => "([value 24])"]);
var_dump(EvaluationsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = EvaluationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setdateEvaluation("[(Value)]");
EvaluationsManager::update($obj);
$objUpdated = EvaluationsManager::findById(1);
echo "Liste des objets" . "<br>";
$array = EvaluationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = EvaluationsManager::findById(1);
EvaluationsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = EvaluationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>