<?php

$age = readline("Votre age : ");

$permis = readline("Nombre d'année de permis : ");

$accident = readline("Nombre d'accident responsable : ");

$fid = readline("Assure depuit combien de temps chez nous ? : ");


if (($age < 25 && $permis < 2 && $accident = 0 ) || ($age > 25 && $permis > 2 && $accident = 0))  {

   $tarif = 1;

}
elseif (($age < 25 && $permis < 2 && $accident >= 1 ) || ($age < 25 && $permis > 2 && $accident > 1) || ($age > 25 && $permis < 2 && $accident > 1) || ($age > 25 && $permis > 2 && $accident >= 2)){

    echo "Refusé par l'assurance";

}
else if (($age < 25 && $permis > 2 && $accident > 0 || $age > 25 && $permis < 2 && $accident > 0) || ($age > 25 && $permis > 2 && $accident = 1 )) {
    
    $tarif = 2;

}
else if ($age > 25 && $permis > 2 && $accident = 0) {

    $tarif = 3;


}

if ($fid > 1 ) {
  
    $tarif++;

    switch ($tarif) {
        case 2: {
            
        }
    }
    
}
else {

}