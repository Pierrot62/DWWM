<?php
$idStage = $_POST["idStage"];

$moment = ["horaireDebutJour", "horaireDebutDej", "horaireFinDej", "horaireFinJour"];
for ($i = 1; $i < 7; $i++)
{
    for ($j = 0; $j < 4; $j++)
    {
        $libelle = LibellesHorairesManager::getByLibelle($moment[$j] . $i);
        $time = $_POST[$moment[$j] . $i];
        $valeur = ValeursHorairesManager::getListByStageEtLibelle($idStage, $libelle->getIdLibelleHoraire());
        if ($valeur == null)
        {
            $valeur = new ValeursHoraires(["idStage" => $idStage, "idLibelleHoraire" => $libelle->getIdLibelleHoraire(), "valeurHoraire" => $time]);
            ValeursHorairesManager::add($valeur);
        }
        else
        {
            $valeur->setValeurHoraire($time);
            ValeursHorairesManager::update($valeur);
        }

    }
}

// gerer le lieu de realisation !

$lieuRealisation = "";
for ($i = 1; $i < 4; $i++)
{
    if (isset($_POST["lieuRealisation" . $i]))
    {
        $lieuRealisation = $lieuRealisation . $_POST["lieuRealisation" . $i] . ", ";
    }
}
if (isset($_POST["lieuRealisation5"]) && $_POST["lieuRealisation5"] != "")
{
    $lieuRealisation = $lieuRealisation . $_POST["lieuRealisation5"];
}
else
{
    $lieuRealisation = substr($lieuRealisation, 0, strlen($lieuRealisation) - 2);
}

// gerer le deplacement oui ou non !
if ($_POST["deplacement"] == "1" && $_POST["frequenceDeplacement"] != "autre")
{
    $frequenceDeplacement = $_POST["frequenceDeplacement"];
}
else
{
    $frequenceDeplacement = $_POST["frequenceDeplacement1"];
}

$modeDeplacement = "";
// gerer le mode deplacement !
for ($i = 1; $i < 3; $i++)
{
    if (isset($_POST["modeDeplacement" . $i]))
    {
        $modeDeplacement = $modeDeplacement . $_POST["modeDeplacement" . $i] . ", ";
    }
}
if (isset($_POST["modeDeplacement4"]) && $_POST["modeDeplacement4"] != "")
{
    $modeDeplacement = $modeDeplacement . $_POST["modeDeplacement4"];
}
else
{
    $modeDeplacement = substr($modeDeplacement, 0, strlen($modeDeplacement) - 2);
}

$td = "";
for ($i = 1; $i < 16; $i++)
{
    if (isset($_POST["td" . $i]))
    {
        $td = $td . $_POST["td" . $i] . ", ";
    }

}
$td = substr($td, 0, strlen($td) - 2);

//******************************* */

$stage = StagesManager::findById($idStage);

$stage->setEtape(3);
$stage->setLieuRealisation($lieuRealisation);
$stage->setDeplacement($_POST["deplacement"]);
$stage->setFrequenceDeplacement($frequenceDeplacement);
$stage->setModeDeplacement($modeDeplacement);
$stage->setAttFormReglement($_POST["attFormReglement"]);
$stage->setLibelleAttFormReg($_POST["libelleAttFormReg"]);
$stage->setVisiteMedical($_POST["visiteMedical"]);
$stage->setTravauxDang($_POST["travauxDang"]);

StagesManager::update($stage);

header("location:Index.php?page=FormFRCondition&idStage=1");