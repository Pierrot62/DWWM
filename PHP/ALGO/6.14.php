<?php

require 'FonctionsTableaux.php';

$tab = creerTableauTermineParZero();
$supp = 0;
$moyenne = array_sum($tab) / count($tab);

for ($i = 0; $i < count($tab); $i++) {

    if ($tab[$i] > $moyenne) {
        $supp++;
    }

}

echo "Il y a " . $supp . " notes au dessus de la moyenne de la classe !";
