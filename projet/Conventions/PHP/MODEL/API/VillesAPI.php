<?php
$id=$_POST["idRegion"];
$type=$_POST["type"];

if($type=="D")
{
    echo json_encode(VillesManager::getListByDepartement($id,true));
}
else{
    $listeVille = [];
    $listeDepartement = DepartementsManager::getByRegion($id);
    foreach($listeDepartement as $dept)
    {
        $listeVille = array_merge ($listeVille,VillesManager::getListByDepartement($dept->getIdDepartement(),true));
    }
    usort($listeVille,"compare");
    
    echo json_encode($listeVille);
}

function compare($a,$b)
{
    return $a["nomVille"] > $b["nomVille"];
}




