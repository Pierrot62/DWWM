<?php

function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");



function afficheTableau($tab)
{
    echo "\n";
    foreach ($tab as $elt) // le tableau est parcouru de la 1ere à la dernière case, les cases sont mises tour à tous dans $elt
    {
        echo $elt->toString() . "\n";
    }
    echo "\n";
}

$produit[] = new produit(["numero" => "2487586", "designation" => "GTX 3090Ti","categorie" => "Composant Informatique" ,"lieu de stockage" => "Lauwin-Planque"]);
$produit[] = new produit(["numero" => "7999266", "designation" => "PastaBox","categorie" => "Alimentation" ,"lieu de stockage" => "Saran"]);
$produit[] = new produit(["numero" => "8320170", "designation" => "Bureau D'angle","categorie" => "Mobilier" ,"lieu de stockage" => "Saône"]);
$produit[] = new produit(["numero" => "7645252", "designation" => "Intel i9 9900k","categorie" => "Composant Informatique" ,"lieu de stockage" => "Montélimar"]);
$produit[] = new produit(["numero" => "5686032", "designation" => "Pot de fleur","categorie" => "Jardinage" ,"lieu de stockage" => "Saran"]);

afficheTableau($produit);
