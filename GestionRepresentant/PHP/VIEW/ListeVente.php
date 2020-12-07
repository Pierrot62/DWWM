<?php

if (isset($_SESSION["utilisateur"]) == true) {

    $vente = VentesManager::getList();

    echo '<div class="ajouter"><a href="index.php?page=FormVente&mode=add">Ajouter une vente </a></div>';

    foreach ($vente as $unevente) {

        $representant = (RepresentantsManager::findById($unevente->getIdRepres()));
        $produit = ProduitsManager::findById($unevente->getIdProduit());
        $client = ClientsManager::findById($unevente->getIdClient());

        echo '
            <div class="listeProduits flex">
                <div class="produit">' . $representant->getNomRepres() . '</div>
                <div class="produit">' . $produit->getNomProduit() . '</div>
                <div class="produit">' . $client->getNomClient() . '</div>
                <div class="produit">' . $unevente->getQuantite() . '</div>
                <div><a href="index.php?page=FormVente&mode=update&id=' . $unevente->getIdVente() . '">Modifier</a></div>';
                if ($_SESSION['utilisateur']->getRoleUser() == 2) {
                    echo '<div><a href="index.php?page=FormVente&mode=delete&id=' . $unevente->getIdVente() . '">Supprimer</a></div>';
                }
           echo '</div>';
    }
    

} else {
    header("location: index.php?page=FormConnect");
}
