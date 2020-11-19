<?php
echo '
<section>
<div><a class="new" href="PHP/VIEW/add.php">Ajouter un produit</a></div>
';
    echo "<div class=\"titrePage\">Liste des Produits</div>" . '<br>';
$tableau = ProduitsManager::getList();
foreach ($tableau as $unProduit)
{
    echo'
    <div></div>
    <div class="produit">
        <div class="nomProduit">'.$unProduit->getLibelleProduit().'</div>
        <div><a class="voir" href="PHP/VIEW/view.php?id='.$unProduit->getIdProduit().'">Voir le produit</a></div>
        <div><a class="edit" href="PHP/VIEW/update.php?id='.$unProduit->getIdProduit().'">Modifier le produit</a></div>
        <div><a class="supp" href="PHP/VIEW/delete.php?id='.$unProduit->getIdProduit().'">Supprimer le produit</a></div>
    </div>
    <div></div>';
}


// </section>