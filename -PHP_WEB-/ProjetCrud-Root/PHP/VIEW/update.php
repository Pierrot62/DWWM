<?php
echo '
<section class="input">
<div></div>';

$idProduits = $_GET["id"];

$pUpdate = ProduitsManager::findById($idProduits);

echo'
<div class=\"titrePage\">Modifier le produit n°'.$pUpdate->getIdProduit().'</div>";
<form method="post" action="./index.php?traitement=update&code=traitement">

    <input type="hidden" name="IdProduit" value="'.$pUpdate->getIdProduit().'">
    <input type="text" name="libelleProduit" value="'.$pUpdate->getLibelleProduit().'">
    <input type="text" name="prix"  value="'.$pUpdate->getPrix().'">
    <input type="text" name="idCategorie" value="'.$pUpdate->getIdCategorie().'">'
?>
<?php

$listeCateg=CategoriesManager::getList();

    foreach ($listeCateg as $uneCategorie)
    {
        $sel="";
        if ($uneCategorie->getIdCategorie() == $idCateg)
        {
            $sel ="selected";
        }
        
        echo '<option value="'.$uneCategorie->getIdCategorie().'" '.$sel.' >'.$uneCategorie->getLibelleCategorie().'</option>';
    }
    echo'<input type="date" name="dateDePeremption" value="'.$pUpdate->getDateDePeremption().'">
    <input class="edit" type="submit" value="Envoyer le formulaire">
    
</form>
<a href="index.php?code=defautl">Retour a la liste</a>
</section>
</body>
</html>';

