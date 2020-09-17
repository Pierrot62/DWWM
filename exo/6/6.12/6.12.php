<?php

$nbr = readline("Nombre de valeurs : ");

for ($i = 1; $i <= $nbr; $i++) {
    $valeurs[$i] = readline("Valeur " . $i . " : ");

    $valeurs[$i]++;

}

for ($i = 1; $i <= $nbr; $i++) {
    echo "\t", $valeurs[$i];
}
