<?php

echo (" **** Analyse des chaines de caractères **** \n");

do {
    //Recuperation de la chaine de caractère 
    $chaine = readline("Taper une chaine de caractère : (inférieure a 255, terminée par un point) : \n");
    //calcul de la taille
    $taille = strlen($chaine);

} while ($taille > 255);

$voy = 0;
$con = 0;
$chiffre = 0;
$alpha = 0;
$speciaux = 0;

$decouper = explode(",", $chaine);


// echo $taille;


$a = mb_substr_count ( $chaine , "a");
$e = mb_substr_count ( $chaine , "e");
$i = mb_substr_count ( $chaine , "i");
$o = mb_substr_count ( $chaine , "o");
$u = mb_substr_count ( $chaine , "u");
$y = mb_substr_count ( $chaine , "y");

$voy = $a + $e + $i + $o + $u + $y;

$y = mb_substr_count ( $chaine , "y");
