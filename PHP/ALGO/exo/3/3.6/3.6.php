<?php

$a = readline("Votre age ");
 
// if ($a>=6 & $a<8) {
//     echo "poussin";
// }
// elseif ($a>=8 & $a<10) {
//     echo "Pupille";
// }
// elseif ($a>=10 & $a< 12) {
//     echo "Minime";
// } 
// elseif ($a >= 12) {
//     echo "Cadet";
// }
// else {
//     echo "Age invalide";
// }

switch ($a) {
    case $a <= 5 :
        echo ("Trop jeune pour jouer");
    break;

    case $a >= 6 && $a < 8 : 
        echo ("Poussin");
    break;

    case $a >= 8 && $a < 10 : 
        echo ("Pupille");
    break;
    
    case $a >= 10  && $a < 12 : 
        echo ("Minime");
    break;
    
    case $a >= 12 && $a < 44 :
        echo ("Cadet");
    break;

    case $a >= 44 :
        echo ("Trop vieux, tu va te casser une jambe ;)");
    break;
}



