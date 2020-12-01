<?php
$action=($_GET['traitement']);
if ($action == "update"){

$prix=intval($_POST['prix']);
$id=intval($_POST["IdProduit"]);
$produit=ProduitsManager::findById($id);
$produit->setLibelleProduit($_POST['libelleProduit']);
$produit->setPrix($_POST['prix']);
$produit->setDateDePeremption($_POST['dateDePeremption']);
ProduitsManager::update($produit);
header("location:index.php?codePage=accueil");

}

// }else if ($action == "add"){

//     //TRAITEMENT  DU FORMULAIRE//
// $prix=intval($_POST['prix']);
// $produit=new Produits(["libelleProduit"=>$_POST["libelleProduit"],"prix"=>$prix,"dateDePeremption"=>$_POST["dateDePeremption"],"idCategorie"=>$_POST["idCategorie"]]);
// ProduitsManager::add($produit);


else if ($action == "add"){

     //TRAITEMENT  DU FORMULAIRE//
 $prix=intval($_POST['prix']);
$produit=new Produits(["libelleProduit"=>$_POST["libelleProduit"],"prix"=>$_POST["prix"],"dateDePeremption"=>$_POST["dateDePeremption"]]);
ProduitsManager::add($produit);
header("location:index.php?codePage=accueil");

}

else if($action == "delete"){

    $idProduits = $_GET["id"];

$pSuppr = ProduitsManager::findById($idProduits);
ProduitsManager::delete($pSuppr);
header("location:index.php?codePage=accueil");
}

// }
