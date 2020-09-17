<?php

$nbr = readline("Nombre de valeurs : ");
$Grand = 0;
for ($i = 1; $i <= $nbr; $i++) {
    $valeurs[$i] = readline("Valeur " . $i . " : ");

    if ($nbr)
    $valeurs[$i]++;



}

for ($i = 1; $i <= $nbr; $i++) {
    echo "\t", $valeurs[$i];
}
