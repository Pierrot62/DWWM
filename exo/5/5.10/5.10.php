<?php

$nbC = readline("Nombre de cheveaux partants : ");
$nbJ = readline("Nombre de cheveaux joués : ");
echo $nbC . " cheveaux sont au depart de la courses et vous avez joués sur " . $nbJ . " cheveaux\n\nVoici vos chance de gagner : \n\n";

$ch1 = 1;
$ch2 = 2;

for ($i = 1 ; $i < $nbJ ; $i++){
    $ch1 = $nbC/($nbC-$nbJ);
    $ch2 = $nbC/($nbJ*($nbC-$nbJ));
    
}

echo "Dans l'ordre, une chance sur ".$ch1." de gagner\n\n";
echo "Dans le désordre, une chance sur ".$ch2." de gagner\n";