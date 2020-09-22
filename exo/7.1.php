<?php

require "FonctionsTableaux.php";

$t = creerTableauTermineParZero();

if ($t[0] > $t[1]){
        $sens = "C";

    if ($sens == "C"){
        $t[$i] = $t[$i - 1] - 1;
        echo "Consecutif decroissant";
    }
    else {
        $t[$i] = $t[$i - 1] + 1;
        echo "Consecutif croissant";
}

}       
else{

echo ("Non consecutifs");

}