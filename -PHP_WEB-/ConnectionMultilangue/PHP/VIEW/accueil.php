<?php

            if (!empty($_SESSION['utilisateur']) && $_SESSION['utilisateur']->getRole() == 1) {
                echo '<div>';
                echo '<button><a href="index.php?traitement=add&codePage=add">Ajouter un vehicules</a></button>';
                echo '</div>';
                }
            ?>


<?php
echo '
<section>
<div></div>
';
    echo "<div class=\"titrePage\">Liste des Produits</div>" . '<br>';
$tableau = ProduitsManager::getList();
foreach ($tableau as $unProduit)
{

    echo '<div class="produit">';
    echo '<div class="nomProduit">'.$unProduit->getLibelleProduit().'</div>';
    echo '<div><a class="voir" href="index.php?codePage=detail&id='.$unProduit->getIdProduit().'">Voir le produit</a></div>';

        if (!empty($_SESSION['utilisateur']) && $_SESSION['utilisateur']->getRole() == 1) {

            echo'<div><a class="edit" href="index.php?codePage=update&id='.$unProduit->getIdProduit().'">Modifier le produit</a></div>';
            echo'<div><a class="supp" href="index.php?traitement=delete&codePage=traitement&id='.$unProduit->getIdProduit().'">Supprimer le produit</a></div>';

            }
       
       
    echo'</div>';
    
}

echo '<div></div>';

echo '</section>';