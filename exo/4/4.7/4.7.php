<?php

$age = readline("Votre age : ");

$permis = readline("Nombre d'année de permis : ");

$accident = readline("Nombre d'accident responsable : ");

$fid = readline("Assure depuit combien de temps chez nous ? : ");

if ($fid > 1 ) {

    echo "Tarif bleu";

}

elseif ($age < 25 && $permis < 2 && $accident >= 1 )  {

    echo "Refusé par l'assurance";

}
elseif ($age < 25 && $permis < 2 && $accident = 0 ){

    echo "Tarif Rouge";

}
else if ($age < 25 && $permis > 2 && $accident > 0 || $age > 25 && $permis < 2 && $accident > 0) {
    
    echo "Tarif Orange";

}
else if ($age < 25 && $permis > 2 && $accident > 1 || $age > 25 && $permis < 2 && $accident > 1) {
    
    echo "Refusé par l'assurance";

}
else if ($age > 25 || $age < 25 && $accident >= 2 && $permis < 2 || $permis >= 2 ) {
    
    echo "Refusé par l'assurance";

}
else if ($age > 25 && $permis > 2 && $accident = 0) {

    echo "Tarif Vert";

}
else if ($age > 25 && $permis > 2 && $accident = 1 ){
    echo "Tarif Orange";

}
else if ($age > 25 && $permis > 2 && $accident > 1) {
    echo "Refusé par l'assurance";
}