<?php

    $a = readline("Candidat 1 : ");
    $b = readline("Candidat 2 : ");
    $c = readline("Candidat 3 : ");
    $d = readline("Candidat 4 : ");

    do {    $r1 = readline("Score du candidat 1 : ");
    } while ($r1 > 100 or $r1 < 0 );

    do{     $r2 = readline("Score du candidat 2 : ");
    } while ($r1 > 100 or $r1 < 0 );

    do {    $r3 = readline("Score du candidat 3 : ");
    } while ($r1 > 100 or $r1 < 0 );

    do {    $r4 = readline("Score du candidat 4 : ");
    } while ($r1 > 100 or $r1 < 0 );

    $somme = $r1 + $r2 + $r3 + $r4;

    if ($somme > 100 ) {
        echo ("Valeures incorect !\n");

        do {    $r1 = readline("Score du candidat 1 : ");
            } while ($r1 > 100 or $r1 < 0 );

        do{     $r2 = readline("Score du candidat 2 : ");
            } while ($r1 > 100 or $r1 < 0 );

        do {    $r3 = readline("Score du candidat 3 : ");
            } while ($r1 > 100 or $r1 < 0 );

        do {    $r4 = readline("Score du candidat 4 : ");
            } while ($r1 > 100 or $r1 < 0 );

    }
    if (($r2>=50 OR $r3>=50 OR $r4>=50) && ($r1 <12.5)) {
        echo ("Le candidat $a a perdu !");
    }

    elseif ($r1 >= 50 ) {
        echo ("Le candidat  $a  est elu !");
    }

    elseif ($r1<50 && $r1 >= 12.5 && $r1 > $r2 && $r1 > $r3 && $r1 > $r4 ){
        echo ("Le candidat $a est en balotage favorable ");
    }

    elseif ($r1<50 && $r1 >= 12.5 && $r1 < $r2 && $r1 < $r3 && $r1 < $r4 ){
        echo ("Le candidat $a est en balotage defavorable ");
    }



