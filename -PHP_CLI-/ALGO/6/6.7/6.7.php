<?php

$tab = [];

$somme = 0;
for ($i = 1; $i < 9; $i++) {
    $notes = readline("Notes " .$i. ": ");
    $tab[$i] = $notes;
    $somme = $somme + $notes;
}

echo "La moyenne est de : " . ($somme / 9);
