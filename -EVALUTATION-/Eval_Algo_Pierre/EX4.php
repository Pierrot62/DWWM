<?php

echo ("\n\n **** STATISTIQUES AVIONS ****\n\n");
//Declaration des stat des avions
$nom = ["BOING747", "AIRBUSA380", "LEARJET45", "CD10", "CONCORDE", "ANTOVO32"];
$code = ["BO", "AB", "LJ", "DC", "CO", "AN"];
$vitesse = [800, 950, 700, 900, 1400, 560];
$action = [10000, 12000, 4500, 8000, 16000, 2500];
//Preparation des variable pour les reponse au question et la position de l'element dans le tableau
$stat = "O";
$rep2 = "O";
$pos = 0;
//Calcul de l'avion le plus rapide
$rapide = max($vitesse);
$position = array_search($rapide, $vitesse);
$nomRapide = array_search($position, $nom);
//Calcul de la moyenne du rayon d'action
$somme = array_sum($action);
$moyAction = $somme / 6;

echo $rapide;

do {
    $avion = readline("Entrez le code de l'avion : ");
    do {
        if (in_array($avion, $code)) {
            //Je verifie si le code donner correspond a un code present dans le tableau
            $pos = array_search($avion, $code);
            //Affichage des stats de l'avion choisis
            echo ("Avion : " . $nom[$pos] . " Vitesse : " . $vitesse[$pos] . " Rayon d'action : " . $action[$pos] . "\n\n");

            //Demande si l'utilisateur souhaite voir les stat, $stat prend N si ce nest pas le cas et renvoie au else
            $stat = readline("Voulez vous éditer les statistiques (O/N) ");
            //Affichage des stats des avions
            if ($stat == "O") {
                echo (" L'avion qui vole le plus vite est le " . $nom[$nomRapide] . " à " . $rapide . "km/h \n");
                echo (" La moyenne des rayons d'action est de : " . $moyAction . "\n\n");

                $rep2 = readline("\nVoulez vous faire une autre recherche (O/N)");
                //Nouvelle recherche
                if ($rep2 == "O") {
                    $avion = readline("\nEntrez le code de l'avion : ");
                }

            } else {

                $rep2 = readline("\nVoulez vous faire une autre recherche (O/N)");
                echo ("Au revoir et à bientôt !\n");

            }
            //Code donner non present dans le tableau
        } else {

            echo " Cet avion n'existe pas\n\n";
            $avion = readline("Entrez le code de l'avion : ");

        }

    } while ($stat == "O");

} while ($rep2 == "O");
