<?php 


require "FonctionsTableaux.php";

$pos = 0;
$neg = 0;

$nbr = demandeEntier("Nombre de valeurs : ");

$tab = creerTableauAvecTaille($nbr);

foreach ($tab as $elm){
     if ($elm > 1){
         $pos++;
     }
     else {
         $neg++;
     }
}

echo ("Il y a ".$nbr." valeurs, dont ".$pos." positives et ".$neg." negatives");

// $pos= 0;
// $neg= 0;


// $nbr= readline("Entrer le nombre de valeur : ");


// for ($i = 1 ; $i <= $nbr ; $i++){

//     $valeur[$i] = readline("Entrer la valeur ".$i." : ");

//     if ($valeur[$i] > 1){
//         $pos++;
//     }
//     else {
//         $neg++;
//     }
// }

