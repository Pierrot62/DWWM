<?php

    for ($i=1; $i < 12; $i++) { 
        $valeurs = new ValeursComportementsProfessionnels(["idStage"=>$_POST['idStage'], "idLibelleComportementProfessionnel"=>$_POST['idLibelleComportementProfessionnel'.$i], "valeurComportement"=>$_POST['valeurComportement'.$i]]);
        ValeursComportementsProfessionnelsManager::add($valeurs);
    }

    $numLigne = 1;
    while(isset($_POST['valeurAcquis_'.$numLigne])){
        $valeursAcquis = new ValeursAcquis(["idStage"=>$_POST['idStage'], "ordreAcquis"=>$numLigne, "libelleAcquis"=>$_POST["libelleAcquis_".$numLigne], "valeurAcquis"=>$_POST["valeurAcquis_".$numLigne]]);
        ValeursAcquisManager::add($valeursAcquis);
        $numLigne++; 
    }

    $etapeStage = new Stages($_POST);
    $etapeStage->setEtape(5);
    StagesManager::update($etapeStage);

    header("location:Index.php?page=FormFREvaluation");

