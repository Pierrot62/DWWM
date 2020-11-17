<?php

include "PHP/VIEW/Head.php";
include "PHP/VIEW/Header.php";

/* Test Manager */

// on teste la recherche par ID

// $pNew = new Produits(["idProduit" => 1, "libelleProduit" => "cahier", "prix" => 5, "dateDePeremption" => '2020-12-31']);

// echo 'recherche id = 1' . '<br>';
// $p = ProduitsManager::findById(1);
// var_dump($p);

// // on teste l'ajout
// echo "ajout d'un produit" . '<br>';
// $pNew = new Produits(["libelleProduit" => "cahier", "prix" => 5, "dateDePeremption" => '2020-12-31']);
// ProduitsManager::add($pNew);

// //on affiche la liste des produits
// echo "Liste des articles" . '<br>';
// $tableau = ProduitsManager::getList();
// foreach ($tableau as $unProduit)
// {
//     echo $unProduit->toString() . '<br>';
// }

// // on teste la mise à jour
// echo "on met à jour l'id 1" . '<br>';
// $p->setLibelleProduit($p->getLibelleProduit() . 'sss');
// ProduitsManager::update($p);
// $pRecharge = ProduitsManager::findById(1);
// var_dump($pRecharge);

// // on teste la suppression
// echo "on supprime un article" . '<br>';
// $pSuppr = ProduitsManager::findById(5);
// ProduitsManager::delete($pSuppr);

// //on affiche la liste des produits
// echo "liste des articles" . '<br>';
// $tableau = ProduitsManager::getList();
// foreach ($tableau as $unProduit)
// {
//     echo $unProduit->toString() . '<br>';
// }



$pNew[] = new Clients(["idClient" => 1, "nomClient" => "Rjeb", "prenomClient" => "Zied","ageClient" => 20 ,"fidelite" => 1 , "cagnotte" => 1.5]);
$pNew[] = new Clients(["idClient" => 2, "nomClient" => "Rjeb", "prenomClient" => "Zied","ageClient" => 20 ,"fidelite" => 1 , "cagnotte" => 1.5]);
$pNew[] = new Clients(["idClient" => 3, "nomClient" => "Rjeb", "prenomClient" => "Zied","ageClient" => 20 ,"fidelite" => 1 , "cagnotte" => 1.5]);
$pNew[] = new Clients(["idClient" => 4, "nomClient" => "Rjeb", "prenomClient" => "Zied","ageClient" => 20 ,"fidelite" => 1 , "cagnotte" => 1.5]);


// on teste la recherche par ID

echo 'recherche id = 1' . '<br>';
$p = ClientsManager::findById(1);
var_dump($p);

// on teste l'ajout
echo "ajout d'un Client" . '<br>';
$pNew = new Clients(["nomClient" => "JESAISPASLECRIRE", "prenomClient" => "Sofiane", "fidelite" => 0 , "cagnotte" => 0]);
ClientsManager::add($pNew);

//on affiche la liste des Clients
echo "Liste des clients" . '<br>';
$tableau = ClientsManager::getList();
foreach ($tableau as $unClient)
{
    echo $unClient->toString() . '<br>';
}

// on teste la mise à jour
echo "on met à jour l'id 1" . '<br>';
$p->setNomClient($p->getNomClient() . 'sss');
ClientsManager::update($p);
$pRecharge = ClientsManager::findById(1);
var_dump($pRecharge);

// on teste la suppression
echo "on supprime un article" . '<br>';
$pSuppr = ClientsManager::findById(5);
ClientsManager::delete($pSuppr);

//on affiche la liste des Clients
echo "liste des Clients" . '<br>';
$tableau = ClientsManager::getList();
foreach ($tableau as $unClient)
{
    echo $unClient->toString() . '<br>';
}


include "PHP/VIEW/Footer.php";
