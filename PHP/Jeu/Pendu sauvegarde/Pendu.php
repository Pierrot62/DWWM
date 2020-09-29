<?php

require "fonctionPendu.php";

function lancerPartie()
{

    $nbErreur = 0;

    $motATrouver = choisirMot();

    $mot = str_split($motATrouver);
    $motcoder = coderMot($motATrouver);
    $gagner = 0;
    $mauvaiseLettre = [];

    do {

        afficherTableau($motcoder);
        if (!empty($mauvaiseLettre)) {
            afficherTableau($mauvaiseLettre);
        }
        $lettre = demanderLettre();
        $letPos = testerLettre($lettre, $mot, 0);
        if (empty($letPos)) {
            $nbErreur++;
            $mauvaiseLettre[] = $lettre;
        } else {
            $motcoder = ajouterLesLettres($lettre, $motcoder, $letPos);

        }
        DessinerPendu($nbErreur);
        $gagner = testerGagner($nbErreur, $motcoder);
    } while ($gagner == 0);
    if ($gagner == 1) {
        echo "Vous avez gagné. \nLe mot était $motATrouver";
    } else {
        echo "Vous avez perdu.\nLe mot était $motATrouver";
    }

}

lancerPartie();
