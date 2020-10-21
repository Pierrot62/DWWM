<?php

function affichageTableau($tableau)
{
    for ($i = 0; $i < 9; $i++) {
        echo "[", $tableau[$i], "]" . "\t";
    }
    return $tableau;
}
