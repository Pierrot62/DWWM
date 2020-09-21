<?php

require "FonctionsTableaux.php";

$tab= creerTableauAvecTaille(9);

echo "La moyenne est de  : ". array_sum($tab) / count($tab);

// $moyenne = 0;
// $somme = 0;

// for ($i = 1 ; $i <= 9 ; $i++){
//     $note[$i]= readline("Entrer la note ".$i. " : ");
//     $somme = $somme + $note[$i];
// }

// $moyenne = $somme / $i;

// echo "La moyenne et de ".$moyenne;

