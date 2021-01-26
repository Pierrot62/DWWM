<?php

$info = new Stages($_POST);
$stage = StagesManager::findById($info->getIdStage());
$stage->setObjectifPAE($info->getObjectifPAE());
$stage->setSujetStage($info->getSujetStage());

StagesManager::update($stage);