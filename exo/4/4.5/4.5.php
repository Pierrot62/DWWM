<?php

$s = readline("Homme (H) / Femme (F) : ");

do {
    echo "valeur incorrect ! ";
    $s = readline("Homme (H) / Femme (F) : ");
} while (($s != "H") and ($s != "F"));

$a = readline("age : ");

if (($s = "H" && $a > 20) && ($s = "F" && $a >= 10 && $a <= 35)) {
    echo "vous payez des impots ! ";
} elseif ($s = "H" && $a <= 20) {
    echo "Tu as de la chance mon petit !! ";
}
