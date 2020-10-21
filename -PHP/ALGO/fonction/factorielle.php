<?php

function factorielle($nombre) //calcule la factorielle d'un nombre

{
    $facto = 1;

/* Calculer la factorielle */
    for ($i = 2; $i <= $nombre; $i++) {
        $facto = $facto * $i; //$facto *=$i;
    }
    return $facto;
}
