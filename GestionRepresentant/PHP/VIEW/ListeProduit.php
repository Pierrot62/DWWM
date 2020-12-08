<?php

if (isset($_SESSION["utilisateur"]) == true) {

    $produit = ProduitsManager::getList();
    if ($_SESSION["utilisateur"]->getRoleUser() ==2){

    echo '<div class="ajouter"><a href="index.php?p=FormProduit&mode=add">Ajouter un produit </a></div>';
    echo '<select name="selectCouleur">';
    echo '<option value="rouge">rouge</option>';
    echo '</select>';
    }
    foreach ($produit as $unproduit) {

        echo '
            <div class="liste flex">
                <div class="elmListe">' . $unproduit->getNomProduit() . '</div>
                <div class="elmListe">' . $unproduit->getCouleurProduit() . '</div>
                <div class="elmListe">' . $unproduit->getPoidsProduit() . '</div>';

        if ($_SESSION['utilisateur']->getRoleUser() == 2) {
            echo '<div class="elmListe supprimer"><a href="index.php?p=FormProduit&mode=delete&id=' . $unproduit->getIdProduit() . '">Supprimer</a></div>
                    <div class="elmListe"><a href="index.php?p=FormProduit&mode=update&id=' . $unproduit->getIdProduit() . '">Modifier</a></div>';
        }

        echo '</div>';
    }

} else {
    header("location: index.php?p=FormConnect");
}
