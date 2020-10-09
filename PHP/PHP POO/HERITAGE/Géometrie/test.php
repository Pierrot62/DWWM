<?php

function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");

//CREATION RECTANGLE
$rec1 = new Pave(["longueur"=>50 , "largeur"=>50 , "hauteur"=>100 ]);
//AFFICHAGE DES SPEC DU RECTANGLE
echo $rec1->AfficherPave();

//CREATION RECTANGLE
$tri1 = new Pyramide(["base"=> 50 , "hauteur"=> 50 , "hauteur"=>100 ]);
//AFFICHAGE DES SPEC DU RECTANGLE
echo $tri1->AfficherPyramide();

//CREATION RECTANGLE
$cer1 = new Sphere(["diametre"=> 10, "hauteur"=>100  ]);
//AFFICHAGE DES SPEC DU RECTANGLE
echo $cer1->AfficherSphere();