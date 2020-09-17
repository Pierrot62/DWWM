<?php

function demanderEntierPhrase($phrase)
{

    do {
        do {
            $nb = readline($phrases);
        } while (!is_numeric($nb)); //Verification si c'est bien un numerique
    } while (!is_int($nb * 1)); //Convertion du numerique en entier avec une multiplication par 1
    return $nb;
}
