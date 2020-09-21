<?php

require 'FonctionsTableaux.php';

$plus = 0;

$nbr = demandeEntier("Nombre de valeurs souhaiter : ");

$tab = creerTableauAvecTaille($nbr);

for ($i = 0; $i < $nbr; $i++){

    if ($tab[$i] > $plus) {

        $plus = $tab[$i];
        $pos = $i;
        $pos++;
    }
    else{

    }

    
}


if ($pos > 1 ){
    echo ("la plus grande valeur est : ".$plus. " en ".$pos."eme position.");
}
else {
    echo ("la plus grande valeur est : ".$plus. " en ".$pos."er position.");
}

