<?php


function autoload($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("autoload");


function afficheTableau($tab)
{
    echo "\n";
    foreach ($tab as $elt) // le tableau est parcouru de la 1ere à la dernière case, les cases sont mises tour à tous dans $elt
    {
        echo $elt->toString() . "\n";
    }
    echo "\n";
}

$a[] = new Article(["idArticle" => 1, "libelleArticle" => "Brosse a dent","prixHT" => 50 ,"codeBarre" => 59520 , "idCategorie" => 2 , "idTVA" => "2","Categorie" => "Papeterie","TVA" => 20]);
$a[] = new Article(["idArticle" => 1, "libelleArticle" => "Brosse a dent","prixHT" => 50 ,"codeBarre" => 59520 , "idCategorie" => 2 , "idTVA" => "2","Categorie" => "Papeterie","TVA" => 20]);

afficheTableau($a);