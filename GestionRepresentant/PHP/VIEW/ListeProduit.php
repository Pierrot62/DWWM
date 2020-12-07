<?php

if (isset($_SESSION["utilisateur"]) == true) {

    $produit = ProduitsManager::getList();
    if ($_SESSION["utilisateur"]->getRoleUser() ==2){

    echo '<div class="ajouter"><a href="index.php?page=FormProduit&mode=add">Ajouter un produit </a></div>';
    }
    foreach ($produit as $unproduit) {

        echo '
            <div class="listeProduits flex">
                <div class="produit">' . $unproduit->getNomProduit() . '</div>
                <div class="produit">' . $unproduit->getCouleurProduit() . '</div>
                <div class="produit">' . $unproduit->getPoidsProduit() . '</div>';

        if ($_SESSION['utilisateur']->getRoleUser() == 2) {
            echo '<div><a href="index.php?page=FormProduit&mode=delete&id=' . $unproduit->getIdProduit() . '">Supprimer</a></div>
                    <div><a href="index.php?page=FormProduit&mode=update&id=' . $unproduit->getIdProduit() . '">Modifier</a></div>';
        }

        echo '</div>';
    }

} else {
    header("location: index.php?page=FormConnect");
}
