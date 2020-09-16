<?php

$s = readline("Homme (H) / Femme (F) : ");

 while (($s != "H") && ($s != "F")) {
     echo "Saisie invalide\n";
     $s = readline("Homme (H) / Femme (F) : ");
 }

$a = readline("age : ");

if (($s == "H" && $a > 20) || ($s == "F" && $a >= 18  && $a <= 35)) {
    echo "vous payez des impots ! ";
}
else {
    echo "Vous ne payer pas d'impots";
}
