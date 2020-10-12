<?php

//JE ME SUIS RENDU COMPTE VERS LA FIN QUE ENFAITE JE N'AVAIS PRESQUE PAS UTILISER LES CLASSE, J'AI TOUT FAIT DANS lancer.php J'AI ESSAYER DE MODIFIER MAIS PLUS RIEN DE FONCTIONNE

function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");

function afficheTableau($tab)
{
    echo "\n";
    foreach ($tab as $elt) // le tableau est parcouru de la 1ere à la dernière case, les cases sont mises tour à tous dans $elt
    {
        echo $elt->toString() . "\n";
    }
    echo "\n";
}

//CREATION DU DE
$De = new De(["Valeur" => ""]);
$Hero = new Joueur(["Point de vie" => 50]);
$MonstreDifficile = new Monstredificile([])

function RandomMonstre()
{
    $choix = rand(1, 2);
    if ($choix == 1) {
        return 0;
    } else {
        return 1;
    }

}

$MFacile = 0;

$nbVie = 50;

$i = 50;

function DeHero()
{
    return rand(0, 6);
}

function DeMonstre()
{
    return rand(0, 6);
}

$NbMonstreFacile = 0;
$NbMonstreDifficile = 0;
do {

    $NbHero = Dehero();
    $NbMonstre = DeMonstre();

    RandomMonstre();

    if (RandomMonstre() == 0) {
        echo "\nMonHeros attaque : " . $NbHero . " Le monstre : " . $NbMonstre;
        if ($NbHero >= $NbMonstre) {
            echo "\n***\t\tHero Gagne";
            $MFacile +=1;
            $nbVie += 1;
        } else {
            $NbHero = Dehero();
            echo "\n***\t\tDouclier " . $NbHero;
            echo "\nMonHeros attaque : " . $NbHero . " Le monstre : " . $NbMonstre;
            if ($NbHero <= 2) {
                echo "\n***\t\tHero Gagne";
                $MFacile += 1;
                $nbVie += 1;

            } else {
                $nbVie -= 10;
                echo "\n***\t\tHero subit des degats de 10\treste : " . $nbVie;
            }

        }

        $NbMonstreFacile +=1;

    } else {
        echo "\nMonHeros attaque : " . $NbHero . " Le monstre : " . $NbMonstre;
        echo "\nCEST UN MONSTRE DIFFICILE";
        if ($NbHero >= $NbMonstre) {
            echo "\n***\t\tHero Gagne";
            $NbMonstre = DeMonstre();
            if ($NbMonstre < 6) {
                $degat = $NbMonstre*5;
                $nbVie - $degat;
                echo "\n***\t\tSort Magique ".$degat;
                echo "\n***\t\tHero subit des degats de ".$degat."\treste : " . $nbVie;
            }

            $MFacile = +1;
        } else {
            $NbHero = Dehero();
            echo "\n***\t\tDouclier " . $NbHero;
            if ($NbHero >= 2) {
                echo "\n***\t\tHero Gagne";
                $MFacile = +1;
            } else {
                $nbVie -= 10;
                echo "\n***\t\tHero subit des degats de 10\treste : " . $nbVie;
            }

        }
       
        $NbMonstreDifficile += 1;
    }
    echo chr(27) . chr(91) . 'H' . chr(27) . chr(91) . 'J'; //permet de vider l'écran

    if ($nbVie <= 0){
        echo "\nDommage, vous etes mort ... ";
        echo "\nCela dit, vous avez tué " .$NbMonstreFacile." monstre facile et " .$NbMonstreDifficile." monstre difficile";
        echo "\nVous avez      points.";

    }
    else{
        echo "\n**************************************************** MONSTRE SUIVANT";
    }

} while ($nbVie > 0);

// if ($NbHero >= $NbMonstre ) {
//     echo "\nHero Gagne";
// }
// else {
//     echo "\nHero Bouclier";
// }
