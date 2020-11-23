<?php

function inverseLettre ($mot)
{
    $taille = strlen($mot);
    if ($taille == 1) {

        return $mot;

    }
    else {

        return substr($mot, $taille -1) . inverseLettre(substr($mot,0, $taille -1));

    }
}

echo inverseLettre("coucou");