<?php

require FonctionsTableaux.php;


$tab = creerTableauAvecTaille($);


for ($i = 0; $i <= 5; $i++) {

    $tab[$i] = readline("Entrer une voyelle : ");

}
for ($i = 0; $i <= 6; $i++) {

    echo $tab[$i] . "\t";

}
