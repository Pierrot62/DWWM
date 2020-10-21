<?php 
echo ("Entrer une date, ex : 15-05-2014\n");
$jour = readline("Numero de jour : ");
$mois = readline("Numero de mois : ");
$annee = readline("Année : ");

do {
    echo "Date invalide !\n";
    $jour = readline("Numero de jour : ");
    $mois = readline("Numero de mois : ");
    $annee = readline("Année : ");
}
while ($jour > 31 || $mois > 12 || $annee > 2020);

// if ($mois = 4 || $mois = 6 || $mois = 9 || $mois = 11 && $jours > 30){

//     echo "Date invalide";
// }
//  else {
//     echo "Data valide";
//  }
