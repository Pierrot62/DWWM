<?php

echo "Racine de l'equation de 2nd degré\n";
echo "\t Y= aX² + bX +c\n";

//Recuperation des valeurs
$a = readline("Quelle est la valeur de a : \n");
$b = readline("Quelle est la valeur de b : \n");
$c = readline("Quelle est la valeur de c : \n");

//Calcul delta
$deltat = pow($b, 2) - 4 * $a * $c;

$racineDouble = $b / (2 * $a);

// $x1 = (-$b +)
$x1 = (-$b + ($delta))/ 2 * $a;
if ($delta < 0) {
    echo ("L'equation ne posséde pas de racine réelle : \n");
    echo $delta;
} else if ($delta = 0) {
    echo ("L'equation posséde une recine double : \n");
    echo $delta;
} else if ($delta > 0) {
    echo ("L'equation posséde 2 racines distinctes : \n");
    echo $delta;
    echo $x1;
}

echo $delta;

// echo $delta;
// echo $racineDouble;
