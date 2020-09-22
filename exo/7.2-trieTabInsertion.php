<?php

require "FonctionsTableaux.php";

$tab = creerTableauTermineParZero();
$n = count($tab);

for ($i = 0; $i < $n - 1; $i++) {
    $mini = $tab[$i];
    $pos = $i;
    for ($j = $i + 1; $j < $n; $j++) {
        if ($tab[$j] < $mini) {
            $mini = $tab[$j];
            $pos = $j;
        }

    }

    $tab[$pos] = $tab[$i];
    $tab[$i] = $mini;

}

for ($i = 0; $i < $n; $i++) {
    echo $tab[$i] . "\t";
}
