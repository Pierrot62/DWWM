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

$produit[] = new produit(["numero" => "2487586\n","date de validité"=>"17/10/2017", "designation" => "GTX 3090Ti\n","categorie" => "Composant Informatique\n" ,"lieu de stockage" => "Lauwin-Planque"]);
$produit[] = new produit(["numero" => "7999266\n", "designation" => "PastaBox\n","categorie" => "Alimentation\n" ,"lieu de stockage" => "Saran"]);
$produit[] = new produit(["numero" => "8320170\n", "designation" => "Bureau D'angle\n","categorie" => "Mobilier\n" ,"lieu de stockage" => "Saône"]);
$produit[] = new produit(["numero" => "7645252\n", "designation" => "Intel i9 9900k\n","categorie" => "Composant Informatique\n" ,"lieu de stockage" => "Montélimar"]);
$produit[] = new produit(["numero" => "5686032\n", "designation" => "Pot de fleur\n","categorie" => "Jardinage\n" ,"lieu de stockage" => "Saran"]);

afficheTableau($produit);
