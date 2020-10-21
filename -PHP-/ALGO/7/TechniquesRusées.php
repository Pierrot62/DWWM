<?php 



for ($i = 0; $i <= 10; $i++) {
    
    $t = readline("Entrer un nombre : ");

    $posmini = $i;

    for ($j = $i; $j <= 11; $j++) {
        if ($t[$j] < $t[$posmini]) {
            $posmini = $j;
        }
        else{

        }
    }

    $temp = $t[$posmini];
    $t[$posmini] = $t[$i];
    $t[$i] = $temp;
}