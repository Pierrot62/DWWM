<?php 

$jour = readline("Numero de jour : ");
$mois = readline("Numero de mois : ");
$annee = readline("Année : ");

do {
    echo "Date invalide !\n";
    $jour = readline("Numero de jour : ");
    $mois = readline("Numero de mois : ");
    $annee = readline("Année : ");
}
while ($jour > 31 || $mois > 12);

if ($annee > 2020) {
    echo "Tes dans le futur mon pote ! ";
}

if ($mois = 1 || $mois = 3 || $mois = 5 || $mois = 7 || $mois = 8 || $mois = 10 || $mois = 12) {
    
    if ($jour > 31 ) {
        echo "Date invalide";
    }
    else {
        echo "Date Valide";
    } 
    
}

else 
    
    if ($jour > 30) {
    echo "Date Invalide";
}
    elseif ($jour > 29) {
    echo "Date Invalide";
}

