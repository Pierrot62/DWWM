
<?php

$mode = $_GET['mode'];

if (isset($_GET["id"])) {

    $id = $_GET["id"];
    $vente = VentesManager::findById($id);

}

?>
    <?php if ($mode == "add") {

    echo '
        <form action="Index.php?page=ActionVente&mode=add" method="POST">

    <label for="IdRepres">representant :</label>

    <select name="IdRepres" id="IdRepres">';

    $presentant = RepresentantsManager::getList();
    foreach ($presentant as $unpresentant) {
        echo '<option value="' . $unpresentant->getIdRepres() . '">' . $unpresentant->getNomRepres() . '</option>';
    }

    echo '
    </select>

    <label for="IdProduit">Produit :</label>

    <select name="IdProduit" id="IdProduit">';

    $produit = ProduitsManager::getList();
    foreach ($produit as $unproduit) {
        echo '<option value="' . $unproduit->getIdProduit() . '">' . $unproduit->getNomProduit() . '</option>';
    }

    echo '
    </select>


    <label for="IdClient">Client :</label>

    <select name="IdClient" id="IdClient">';

    $client = ClientsManager::getList();
    foreach ($client as $unclient) {
        echo '<option value="' . $unclient->getIdClient() . '">' . $unclient->getNomClient() . '</option>';
    }

    echo '
    </select>

    <label for="Quantite">Quantite produit  :</label>';

    echo '<input type="text" name="Quantite">';

    echo '
        <div><input type="submit"></div>
      </form>';

} else if ($mode == "update") {

    echo '
        <form action="Index.php?page=ActionVente&mode=update" method="POST">

    <label for="IdRepres">representant :</label>

    <select name="IdRepres" id="IdRepres">';

    $presentant = RepresentantsManager::getList();
    foreach ($presentant as $unpresentant) {
        echo '<option value="' . $unpresentant->getIdRepres() . '">' . $unpresentant->getNomRepres() . '</option>';
    }

    echo '
    </select>

    <label for="IdProduit">Produit :</label>

    <select name="IdProduit" id="IdProduit">';

    $produit = ProduitsManager::getList();
    foreach ($produit as $unproduit) {
        echo '<option value="' . $unproduit->getIdProduit() . '">' . $unproduit->getNomProduit() . '</option>';
    }

    echo '
    </select>


    <label for="IdClient">Client :</label>

    <select name="IdClient" id="IdClient">';

    $client = ClientsManager::getList();
    foreach ($client as $unclient) {
        echo '<option value="' . $unclient->getIdClient() . '">' . $unclient->getNomClient() . '</option>';
    }

    echo '
    </select>

    <label for="Quantite">Quantite produit  :</label>';

    echo '<input type="text" value="'.$vente->getQuantite().'" name="Quantite">';
    echo '<input type="hidden" name="IdVente" value="'.$id.'">';
    echo ' <div><input type="submit"></div>
      </form>';
}else{
    echo '
        <form action="Index.php?page=ActionVente&mode=delete" method="POST">

    <label for="IdRepres">representant :</label>

    <select name="IdRepres" id="IdRepres">';

    $presentant = RepresentantsManager::getList();
    foreach ($presentant as $unpresentant) {
        echo '<option value="' . $unpresentant->getIdRepres() . '">' . $unpresentant->getNomRepres() . '</option>';
    }

    echo '
    </select>

    <label for="IdProduit">Produit :</label>

    <select name="IdProduit" id="IdProduit">';

    $produit = ProduitsManager::getList();
    foreach ($produit as $unproduit) {
        echo '<option value="' . $unproduit->getIdProduit() . '">' . $unproduit->getNomProduit() . '</option>';
    }

    echo '
    </select>


    <label for="IdClient">Client :</label>

    <select name="IdClient" id="IdClient">';

    $client = ClientsManager::getList();
    foreach ($client as $unclient) {
        echo '<option value="' . $unclient->getIdClient() . '">' . $unclient->getNomClient() . '</option>';
    }

    echo '
    </select>

    <label for="Quantite">Quantite produit  :</label>';

    echo '<input type="text" value="'.$vente->getQuantite().'" name="Quantite">';
    echo '<input type="hidden" name="IdVente" value="'.$id.'">';
    echo ' <div><input type="submit"></div>
      </form>';
}