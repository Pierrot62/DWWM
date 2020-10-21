<?php

require "fonctionPendu.php";

function lancerPartie($niveau)
{

    $nbErreur = 0;
    $gagner = 0;
    $mauvaiseLettre = [];

   
    $motATrouver = choisirMot($niveau);
    $motcoder = coderMot($motATrouver, $niveau);
    $mot = str_split($motATrouver);
    do {

        afficherTableau($motcoder);
        if (!empty($mauvaiseLettre)) {
            afficherTableau($mauvaiseLettre);
        }
        $lettre = demanderLettre();
        $letPos = testerLettre($lettre, $mot, 0, $niveau);
        if (empty($letPos)) {
            $nbErreur++;
            $mauvaiseLettre[] = $lettre;
        } else {
            $motcoder = ajouterLesLettres($lettre, $motcoder, $letPos);

        }
        echo chr(27) . chr(91) . 'H' . chr(27) . chr(91) . 'J'; //permet de vider l'écran
        DessinerPendu($nbErreur, $niveau);
        $gagner = testerGagner($nbErreur, $motcoder, $niveau);
    } while ($gagner == 0);
    if ($gagner == 1) {
        echo "Vous avez gagné. \nLe mot était $motATrouver";
    } else {
        echo "Vous avez perdu.\nLe mot était $motATrouver";
    }

}

$niveau = choisirNiveaux();

lancerPartie($niveau);
