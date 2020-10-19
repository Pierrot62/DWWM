<?php
//***************************************************************************************** */
//JE ME SUIS RENDU COMPTE VERS LA FIN QUE ENFAITE JE N'AVAIS PRESQUE PAS UTILISER LES CLASSES,
//J'AI TOUT FAIT DANS lancer.php J'AI ESSAYER DE MODIFIER MAIS PLUS RIEN DE FONCTIONNE
/********************************************************************************************/

function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");

//CREATION DES OBJET
$De = new De(["Valeur" => ""]);
$Hero = new Joueur(["Point de vie" => 50]);
$colors = new Colors();
//CHOIX DU MONSTRE 0 = facile 1 = difficile
function RandomMonstre()
{
    $choix = rand(1, 2);
    if ($choix == 1) {
        return 0;
    } else {
        return 1;
    }

}
//VARIABLE VIE
$nbVie = 50;

//CHOIX DES NOMBRE DES DE
function DeHero()
{
    return rand(0, 6);
}

function DeMonstre()
{
    return rand(0, 6);
}
//COMPTEUR POUR LE NOMBRE DE MONSTRE TUE
$NbMonstreFacile = 0;
$NbMonstreDifficile = 0;
do {
//CHOIX DES NOMBRE DES DE
    $NbHero = Dehero();
    $NbMonstre = DeMonstre();

    RandomMonstre();
    //FACILE
    if (RandomMonstre() == 0) {
        echo "\nMonHeros attaque : " . $NbHero . " Le monstre : " . $NbMonstre;
        if ($NbHero >= $NbMonstre) {
            echo $colors->getColoredString ("\n***\t\tHero Gagne","green","black");
            $nbVie += 1;
        } else {
            //BOUCLIER
            $NbHero = Dehero();
            echo "\n***\t\tDouclier " . $NbHero;
            echo "\nMonHeros attaque : " . $NbHero . " Le monstre : " . $NbMonstre;
            if ($NbHero <= 2) {
                echo $colors->getColoredString ("\n***\t\tHero Gagne","green","black");
                $nbVie += 1;

            } else {
                $nbVie -= 10;
                echo $colors->getColoredString("\n***\t\tHero subit des degats de 10\treste : " . $nbVie."", "red","black");
            }
        }
        $NbMonstreFacile += 1;
        //DIFFICILE
    } else {
        echo "\nMonHeros attaque : " . $NbHero . " Le monstre : " . $NbMonstre;
        echo $colors->getColoredString("\nCEST UN MONSTRE DIFFICILE","yellow");
        if ($NbHero >= $NbMonstre) {
            echo $colors->getColoredString ("\n***\t\tHero Gagne","green","black");
            $NbMonstre = DeMonstre();
            //SORT MAGIQUE
            if ($NbMonstre < 6) {
                $degat = $NbMonstre * 5;
                $nbVie - $degat;
                echo "\n***\t\tSort Magique " . $degat;
                echo $colors->getColoredString("\n***\t\tHero subit des degats de " . $degat . "\treste : " . $nbVie."", "red","black");
            }

            $MFacile = +1;
        } else {
            //BOUCLIER
            $NbHero = Dehero();
            echo "\n***\t\tDouclier " . $NbHero;
            if ($NbHero >= 2) {
                echo $colors->getColoredString ("\n***\t\tHero Gagne","green","black");
                $MFacile = +1;
            } else {
                $nbVie -= 10;
                echo $colors->getColoredString("\n***\t\tHero subit des degats de 10\treste : " . $nbVie."", "red","black");
            }

        }

        $NbMonstreDifficile += 1;
    }

    echo chr(27) . chr(91) . 'H' . chr(27) . chr(91) . 'J'; //permet de vider l'écran

    if ($nbVie <= 0) {
        echo "\nDommage, vous etes mort ... ";
        echo "\nCela dit, vous avez tué " . $NbMonstreFacile . " monstre(s) facile et " . $NbMonstreDifficile . " monstre(s) difficile";
        echo "\nVous avez      points.";

    } else {
        echo "\n**************************************************** MONSTRE SUIVANT";
    }

} while ($nbVie > 0); //BOUCLE QUI CONTINUE LE TEMPS QUE $nbVie EST SUPP A 0

// if ($NbHero >= $NbMonstre ) {
//     echo "\nHero Gagne";
// }
// else {
//     echo "\nHero Bouclier";
// }
