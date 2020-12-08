<?php

if (isset($_SESSION["utilisateur"]) == true) {




    

    echo '<section>';

    echo '<div class="ajouter"><a href="index.php?p=FormProduit&mode=add">Ajouter un produit </a></div>';

    echo '<form method="POST" action="index.php?p=ListeProduit">';
    echo '<select name="selectCouleur">';
    echo '<option name="idCouleur" value="all">Tout afficher</option>';

    $couleur = ProduitsManager::getListCouleur();

    foreach ($couleur as $unecouleur) {

        echo '<option name="idCouleur" value="' . $unecouleur->getCouleurProduit() . '">' . $unecouleur->getCouleurProduit() . '</option>';
    }


    echo '</select>';

    echo '<input type="submit">';

    echo '</form>';

    if (isset($_POST['selectCouleur'])){

        $couleur = $_POST['selectCouleur'];
    }else{

        $couleur = "all";
    }

    if ($couleur == "all"){

        $produit = ProduitsManager::getList($couleur);

    }else{

        $produit = ProduitsManager::getListByCouleur($couleur);

    }
    echo '<div class="liste demomination flex">
                    <div class="info">
                        <div class="elmListe">Nom Du Produit</div>
                        <div class="elmListe">Couleur Du Produit</div>
                        <div class="elmListe">Poids Du Produit</div>';
                    echo'</div>';
            if ($_SESSION['utilisateur']->getRoleUser() == 2) {
                echo '
                    <div class="elmListe">Action</div>
                    <div class="elmListe">Action</div>';
            }
    
            echo '</div>';
        foreach ($produit as $unproduit) {

            echo '
                <div class="liste flex">
                    <div class="info">
                        <div class="elmListe">' . $unproduit->getNomProduit() . '</div>
                        <div class="elmListe">' . $unproduit->getCouleurProduit() . '</div>
                        <div class="elmListe">' . $unproduit->getPoidsProduit() . '</div>';
                    echo'</div>';
            if ($_SESSION['utilisateur']->getRoleUser() == 2) {
                echo '<div class="elmListe supprimer"><a href="index.php?p=FormProduit&mode=delete&id=' . $unproduit->getIdProduit() . '">Supprimer</a></div>
                        <div class="elmListe modifier"><a href="index.php?p=FormProduit&mode=update&id=' . $unproduit->getIdProduit() . '">Modifier</a></div>';
            }
    
            echo '</div>';
            
        }
        echo '</section>';
    




    }
 else {
    header("location: index.php?p=FormConnect");
}
