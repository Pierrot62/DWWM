<?php
echo '
<section>
<div><a class="new" href="index.php?traitement=add&code=add">Ajouter un produit</a></div>
<div></div>
';
    echo "<div class=\"titrePage\">Liste des Produits</div>" . '<br>';
$tableau = ProduitsManager::getList();
foreach ($tableau as $unProduit)
{
    echo'
    
    <div class="produit">
        <div class="nomProduit">'.$unProduit->getLibelleProduit().'</div>
        <div><a class="voir" href="index.php?code=detail&id='.$unProduit->getIdProduit().'">Voir le produit</a></div>
        <div><a class="edit" href="index.php?code=update&id='.$unProduit->getIdProduit().'">Modifier le produit</a></div>
        <div><a class="supp" href="index.php?traitement=delete&code=traitement&id='.$unProduit->getIdProduit().'">Supprimer le produit</a></div>
    </div>
    ';
}

echo '<div></div>

</section>';