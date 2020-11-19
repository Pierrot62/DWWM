<?php
echo '
<section>
<div><a href="PHP/VIEW/add.php">Ajouter un produit</a></div>
';
    echo "liste des Produits" . '<br>';
$tableau = ProduitsManager::getList();
foreach ($tableau as $unProduit)
{
    echo'
    <div class="produit">
        <div>'.$unProduit->getLibelleProduit().'</div>
        <div><a href="PHP/VIEW/view.php?id='.$unProduit->getIdProduit().'">Voir le produit</a></div>
        <div><a href="PHP/VIEW/update.php?id='.$unProduit->getIdProduit().'">Modifier le produit</a></div>
        <div><a href="PHP/VIEW/delete.php?id='.$unProduit->getIdProduit().'">Supprimer le produit</a></div>
    </div>';
}


// </section>