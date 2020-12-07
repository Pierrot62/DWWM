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
                <div class="produit">' . $unevente->getQuantité() . '</div>
                <div><a href="index.php?page=actionProduits&mode=delete&id=' . $unevente->getIdVente() . '">Supprimer</a></div>
                <div><a href="index.php?page=formInscript&mode=update&id=' . $unevente->getIdVente() . '">Modifier</a></div>
            </div>';
    }

} else {
    header("location: index.php?page=FormConnect");
}
