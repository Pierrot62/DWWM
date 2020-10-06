<?php

echo ("      ***** CALCUL D'UN CERCLE *****      \n\n");

$rep = "O";

//Permet de faire un nouveau calcul jusqu'a ce que $rep == "N"
do {
    //Recuperation du rayon du cercle
    $rayon = readline("Quel est le rayon du cercle : \n");

    //Calcul de la circonference et de la surface
    $circonference = 2 * pi() * $rayon;
    $surface = pi() * pow($rayon, 2);

    //affichage des resultats
    echo ("Sa circonférence est de\t :" . $circonference . "\n");
    echo ("Sa surface est de\t :" . $surface . "\n\n");

    //Un autre petit calcul ? :)
    $rep = readline("Voulez-vous faire un autres calcul (O/N) : \r\n");

} while ($rep == "O");

if ($rep == "N") {

    //Si $rep == "N"

    echo ("\nAu revoir et a bientôt ! ");

} else {

    do {

        //Si autre chose que O / N sont entrer par l'utililsateur
    
        echo ("Saisie invalide\n");
        $rep = readline("Voulez-vous faire un autres calcul (O/N) : \r\n");

    } while ($rep == "N");

}

// if ($rep = "O") {

//     $rayon = readline("Quel est le rayon du cercle : ");
//     $circonference = 2 * pi() * $rayon;

//     $surface = pi() * pow($rayon, 2);

//     echo ("Sa circonférence est de\t :" . $circonference . "\n");
//     echo ("Sa surface est de\t :" . $surface . "\n\n");

//     $i = readline("Voulez-vous faire un autres calcul (O/N) : ");

// } else if ($rep = "N") {

//
// }
