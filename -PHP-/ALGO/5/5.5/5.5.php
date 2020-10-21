<?php 

$nbr = readline("Inscrivez un nombre : ");

$somme = 0;

for ($i = 1 ; $i > $nbr ; $i++ ){
    $somme = $somme + $i;
}

echo $somme;