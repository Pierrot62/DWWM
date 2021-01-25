<?php
$idSession=$_POST['idSession'];
$lesStagiaires=StagiaireFormationManager::getListBySession($idSession,false); // recupere la liste des stagiaires de la session
$lesPeriodes=StagiaireFormationManager::getPeriodeBySession($idSession); // recupere les periodes de stages de la session
$i=0;
foreach($lesStagiaires as $unStagiaire)
{
   $resultat=[];
   $tabtemp=[];
    foreach($lesPeriodes as $unePeriode)
    {
        
        //Recupere les id des stages du stagioaire
        $etape=StagesManager::getByStagiaire($unStagiaire->getIdStagiaire(),$unePeriode->getIdPeriode()); 
        if(!empty($etape))
        {
            for ($j=0; $j < count($etape); $j++) { 
                $tabtemp[$j]['idStage']=$etape[$j]->getIdStage();
                $tabtemp[$j]['etapeStage']=$etape[$j]->getEtape();
                $resultat[]=$tabtemp[$j];
           }
        }
        else{
            $tabtemp[0]['idStage']=".";
            $tabtemp[0]['etapeStage']=".";
            $resultat[]=$tabtemp[0];
        }
    }  
    $tab[$i]['i']=$i;
    $tab[$i]['idStagiaire']=$unStagiaire->getIdStagiaire();
    $tab[$i]['nomStagiaire']=$unStagiaire->getNomStagiaire();
    $tab[$i]['prenomStagiaire']=$unStagiaire->getPrenomStagiaire();
    $tab[$i]['etape']=$resultat; 
    $i++;
}
$reponse["nbPeriodes"]=count($lesPeriodes);
for ($i=0; $i<count($lesPeriodes) ; $i   ++) { 
    $reponse["dateDebut".$i]=$lesPeriodes[$i]->getDateDebutPAE();
    $reponse["dateFin".$i]=$lesPeriodes[$i]->getDateFinPAE();
}
$reponse["fields"]=$tab;
echo json_encode($reponse);
?>