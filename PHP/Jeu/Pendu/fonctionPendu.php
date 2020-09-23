<?php
/**
 * Affiche des espace entre chaque lettre
 * 
 * @param string $tab
 */

function afficherTableau($tab)
{
    echo "\n";
    foreach ($tab as $elt) // le tableau est parcouru de la 1ere à la dernière case, les cases sont mises tour à tous dans $elt
    {
        echo $elt . " ";
    }
    echo "\n";
}

function coderMot($t)
{
    $t=str_split($t);
    for ($i=0;$i<count($t);$i++) {
        $t[$i]="_ ";
    }
    return $t;
}

function ajouterUneLettre ($lettre)
{

}

// function testerLettre($lettre, $tab, $depart);