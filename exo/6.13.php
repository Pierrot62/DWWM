<?php

require 'FonctionsTableaux.php';

$nbr = demandeEntier("Nombre de valeurs souhaiter : ");

$tab = creerTableauAvecTaille($nbr);

$plus = $tab[0];

$pos = 0;

for ($i = 0; $i < $nbr; $i++) {

    if ($tab[$i] > $plus) {

        $plus = $tab[$i];
        $pos = $i;
        $pos += 1;
    }

}

if ($pos > 1) {
    echo ("la plus grande valeur est : " . $plus . " en " . $pos . "eme position.");
} else {
    echo ("la plus grande valeur est : " . $plus . " en " . $pos . "er position.");
}
