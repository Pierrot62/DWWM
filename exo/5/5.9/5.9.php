<?php

$prix = 1;
$total = 0;

while ($prix <> 0) {
    $prix = readline("Montant des articles (0 pour terminer) : ");
    $total = $total + $prix;
}
echo "Vous devez : " .$total. " euros\n";
$montant = readline("Montant versé : ");
if ($total == $montant){
    echo "Le compte est bon !";
}
else {
$reste = $montant - $total;
$dix = 0;

while ($reste >= 10) {
    $dix = $dix + 1;
    $reste = $reste - 10;
}
$cinq = 0; 
if ($reste >= 5) {
    $cinq = 1;
    $reste = $reste - 5; 
}

echo "|---------------------|\n|RENDU DE LA MOMMAIE :| \n|---------------------|\nBillets de 10E : ".$dix. "\nBillets de 5E : ".$cinq. "\nPieces de 1E : ".$reste ;
}