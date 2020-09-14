<?php

$a = readline("Votre age ");
 
if ($a>=6 & $a<8) {
    echo "poussin";
}
elseif ($a>=8 & $a<10) {
    echo "Pupille";
}
elseif ($a>=10 & $a< 12) {
    echo "Minime";
} 
elseif ($a >= 12) {
    echo "Cadet";
}
else {
    echo "Age invalide";
}
