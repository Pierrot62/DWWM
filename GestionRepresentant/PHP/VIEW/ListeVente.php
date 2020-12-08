<section>
<?php

if (isset($_SESSION["utilisateur"]) == true) {

    $vente = VentesManager::getList();

    echo '<div class="ajouter"><a href="index.php?p=FormVente&mode=add">Ajouter une vente </a></div>
    <div class="liste flex">
    <div class="elmListe">Non du representant</div>
    <div class="elmListe">Nom du produit</div>
    <div class="elmListe">Nom du client</div>
    <div class="elmListe">Quantite</div>
    <div class="elmListe"><a href="index.php?p=FormVente&mode=add">Ajouter une vente </a></div>
    <div class="elmListe"></div>
    </div>';
    foreach ($vente as $unevente) {

        $representant = (RepresentantsManager::findById($unevente->getIdRepres()));
        $produit = ProduitsManager::findById($unevente->getIdProduit());
        $client = ClientsManager::findById($unevente->getIdClient());

        echo '
            <div class="liste flex">
                <div class="info">
                <div class="elmListe">' . $representant->getNomRepres() . '</div>
                <div class="elmListe">' . $produit->getNomProduit() . '</div>
                <div class="elmListe">' . $client->getNomClient() . '</div>
                <div class="elmListe">' . $unevente->getQuantite() . '</div>
                </div>
                <div class="elmListe modifier"><a href="index.php?p=FormVente&mode=update&id=' . $unevente->getIdVente() . '">Modifier</a></div>';
                if ($_SESSION['utilisateur']->getRoleUser() == 2) {
                    echo '<div class="elmListe supprimer"><a href="index.php?p=FormVente&mode=delete&id=' . $unevente->getIdVente() . '">Supprimer</a></div>';
                }
           echo '</div>';
    }
    

} else {
    header("location: index.php?p=FormConnect");
}
?>
</section>