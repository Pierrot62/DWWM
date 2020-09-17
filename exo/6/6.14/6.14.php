<?php

$moyenne = 0;
$somme = 0;
// $supp = 0;
$nbrNote = readline("Combien de notes y a-t-il ? : ");

for ($i = 0 ; $i <= $nbrNote ; $i++);
{
    $note[$i]= readline("Entrez la note numéro " . $i . " : ");
    $somme = $somme + $note[$i];
    $moyenne = $note[$i] / $nbrNote;
}