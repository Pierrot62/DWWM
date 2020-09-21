<?php

require 'FonctionsTableaux.php';

$plus = 1;

$nbr = demandeEntier("Nombre de valeurs souhaiter : ");

$tab = creerTableauAvecTaille($nbr);

for ($i = 0; $i < $nbr; $i++){

    $tab[$i] = $tab[$i] + 1;

}

echo afficheTableau($tab);

