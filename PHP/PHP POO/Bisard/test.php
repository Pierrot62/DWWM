<?php

//CREATION DES OBJETS
$objet = new NomDeLaClassObjet (["Attribut" => "Valeur" , "Attribut" => "Valeur" , "Attribut" => "Valeur" , "Attribut" => "Valeur" , "Attribut" => "Valeur"]);
$objet = new NomDeLaClassObjet (["Attribut" => "Valeur" , "Attribut" => "Valeur" , "Attribut" => "Valeur" , "Attribut" => "Valeur" , "Attribut" => "Valeur"]);
$objet = new NomDeLaClassObjet (["Attribut" => "Valeur" , "Attribut" => "Valeur" , "Attribut" => "Valeur" , "Attribut" => "Valeur" , "Attribut" => "Valeur"]);
$objet = new NomDeLaClassObjet (["Attribut" => "Valeur" , "Attribut" => "Valeur" , "Attribut" => "Valeur" , "Attribut" => "Valeur" , "Attribut" => "Valeur"]);

function afficheTableau($tab)
{
    echo "\n";
    foreach ($tab as $elt) // le tableau est parcouru de la 1ere à la dernière case, les cases sont mises tour à tous dans $elt
    {
        echo $elt->toString() . "\n";
    }
    echo "\n"   ;
}



