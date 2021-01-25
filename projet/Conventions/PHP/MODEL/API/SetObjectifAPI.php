<?php
$idPeriode=$_POST['id'];
$textObjectif=$_POST['text'];
$periode=PeriodesStagesManager::findById($idPeriode);
$periode->setObjectifPAE($textObjectif);
PeriodesStagesManager::update($periode);