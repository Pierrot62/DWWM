<?php

echo ("\n****\tTABLE DE MULTIPLICATION\t****\n\n");

$rep = "O";

do {

//Recuperation du nombre a multiplier
    $nombre = readline("Entrer le nombre pour lequel vous voulez la table de multiplication : ");

    for ($i = 1; $i <= 10; $i++) {
        //calcul de la table
        $calcul = $nombre * $i;
        //affichage de le table
        echo ($nombre . "\t X" . $i . "\t = " . $calcul . "\n");
    }

    $rep = readline("Voulez-vous continuer ? : \r\n");

} while ($rep == "O");
