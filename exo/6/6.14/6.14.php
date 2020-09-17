<?php

$moyenne = 0;
$somme = 0;
$supp = 0;
$nbrNote = readline("Combien de notes y a-t-il ? : ");

for ($i = 1; $i <= $nbrNote; $i++) {
    $note[$i] = readline("Entrez la note numéro " . $i . " : ");
    $somme = $somme + $note[$i];
    $moyenne = $somme / $nbrNote;
    
    
   
    }

 for ($i = 1; $i <= $nbrNote; $i++){
        if ($note[$i] > $moyenne){
            $supp++;
        }
        else{
            
        }
    }

echo ("Il y a ".$supp. " notes au dessus de la moyenne de le classe \n");
echo ("La moyenne de la classe est de ".number_format($moyenne,2));
