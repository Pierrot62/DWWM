<?php

$mode = $_GET['mode'];

if(isset($_GET["id"])){

    $id = $_GET["id"];
    $produit = ProduitsManager::findById($id);

}
?>

    <?php if($mode == "add"){
         echo '
         <form action="index.php?page=ActionProduit&mode=add" method="POST">

         <div><label for="NomProduit">Nom du Produit</label></div>
         <div>
           <input
             type="text"
             name="NomProduit"
             placeholder="Nom du Produit"
             required
           />
         </div>';
         echo '<div><label for="CouleurProduit">CouleurProduit</label></div>
        <div>
          <input
            type="text"
            name="CouleurProduit"
            placeholder="CouleurProduit"
            required
          />
        </div>';
        echo '<div><label for="CouleurProduit">CouleurProduit</label></div>
        <div>
          <input
            type="text"
            name="CouleurProduit"
            placeholder="CouleurProduit"
            required
          />
        </div>
        <input type="submit"> 
        ';
    }else if($mode == "update"){
        echo '
        <form action="index.php?page=ActionProduit&mode=update" method="POST">

        <div><label for="NomProduit">NomProduit</label></div>
        <div>
          <input
            type="text"
            name="NomProduit"
            value="'.$produit->getNomProduit().'"
            placeholder="Produit"
            required
          />
        </div>';
        echo '<div><label for="CouleurProduit">Couleur du produit</label></div>
        <div>
          <input
            type="text"
            name="CouleurProduit"
            value="'.$produit->getCouleurProduit().'"
            placeholder="Produit"
            required
          />
        </div>';
        echo '<div><label for="PoidsProduit">Poids du produit</label></div>
        <div>
          <input
            type="text"
            name="PoidsProduit"
            value="'.$produit->getPoidsProduit().'"
            placeholder="Produit"
            required
          />
        </div>
        <input type="hidden" name="IdProduit" value="'.$id.'">
        <input type="submit"> 

        ';
    }else{
        echo '
        <form action="index.php?page=ActionProduit&mode=delete" method="POST">

        <div><label for="NomProduit">Produit</label></div>
        <div>
          <input
            type="text"
            disabled
            name="NomProduit"
            value="'.$produit->getNomProduit().'"
            placeholder="Produit"
            required
          />
        </div>';
        echo '<div><label for="CouleurProduit">Ville du Representant</label></div>
        <div>
          <input
            type="text"
            disabled
            name="CouleurProduit"
            value="'.$produit->getCouleurProduit().'"
            placeholder="Nom du Representant"
            required
          />
        </div>';
        echo '<div><label for="PoidsProduit">Ville du Representant</label></div>
        <div>
          <input
            type="text"
            disabled
            name="PoidsProduit"
            value="'.$produit->getPoidsProduit().'"
            placeholder="Nom du Representant"
            required
          />
        </div>
        <input type="hidden" name="IdProduit" value="'.$id.'"></input>
        <input type="submit"> 

        ';
    }
        ?>


    </form>