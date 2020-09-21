<?php

for ($i = 1 ; $i <= 9 ; $i++){
    $note[$i]= readline("Entrer la note ".$i. " : ");
}

for ($i = 1 ; $i <= 9 ; $i++){
    echo $note[$i]."\t";
}