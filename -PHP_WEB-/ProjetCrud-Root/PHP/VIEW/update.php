<?php
echo '
<section>
<div><a class="new" href="index.php?code=add">Ajouter un produit</a></div>
<div></div>
';
$idProduits = $_GET["id"];

$pUpdate = ProduitsManager::findById($idProduits);

echo'
<form method="post" action="./index.php?traitement=update&code=traitement">

    <input type="hidden" name="IdProduit" value="'.$pUpdate->getIdProduit().'">
    <input type="text" name="libelleProduit" value="'.$pUpdate->getLibelleProduit().'">
    <input type="text" name="prix"  value="'.$pUpdate->getPrix().'">
    <input type="date" name="dateDePeremption" value="'.$pUpdate->getDateDePeremption().'">
    <input class="edit" type="submit" value="Envoyer le formulaire">
    
</form>

</body>
</html>';

echo "AAAAAAAAAAAAAAAAAAA";