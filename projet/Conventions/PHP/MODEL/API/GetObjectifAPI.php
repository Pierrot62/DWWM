<?php
$idSession=$_POST['idSession'];
//$idSession="5";
$lesPeriodes=StagiaireFormationManager::getPeriodeBySession($idSession); // recupere les periodes de stages de la session
$i=0;
foreach($lesPeriodes as $unePeriode)
{
    $tab[$i]['idPeriode']=$unePeriode->getIdPeriode();
    $tab[$i]['dateDebutPAE']=$unePeriode->getDateDebutPAE();
    $tab[$i]['dateFinPAE']=$unePeriode->getDateFinPAE();
    $tab[$i]['dateRapportSuivi']=$unePeriode->getDateRapportSuivi();
    $tab[$i]['objectifPAE']=$unePeriode->getObjectifPAE();
    $i++;
}
$reponse["nbPeriodes"]=count($lesPeriodes);
$reponse["fields"]=$tab;
echo json_encode($reponse);
?>