<?php 
$idSessionFormation=1;
$idStagiaire=1;
$part = new Participations(["idSessionFormation" => $idSessionFormation, "idStagiaire" => $idStagiaire]);
            var_dump($part);
            ParticipationsManager::add($part);