<?php
$info = new Stages($_POST);

$stage = StagesManager::findById($info->getIdStage());
$stage->setEtape(4);
$stage->setObjectifPAE($info->getObjectifPAE());
$stage->setSujetStage($info->getSujetStage());
StagesManager::update($stage);

header("location:Index.php?page=FormFRSujetStage&idStage=".$stage->getIdStage());