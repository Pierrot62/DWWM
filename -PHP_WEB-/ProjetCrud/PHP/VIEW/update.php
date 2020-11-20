<?php
include ("head.php");
include ("header.php");
echo '
<section>
<div><a class="new" href="PHP/VIEW/add.php">Ajouter un produit</a></div>
<div></div>
';
$idProduits = $_GET["id"];

$pUpdate = ProduitsManager::findById($idProduits);

echo'
<form method="get" action="traitementUp.php">

    <input type="hidden" name="IdProduit" value="'.$pUpdate->getIdProduit().'">
    <input type="text" name="libelleProduit" value="'.$pUpdate->getLibelleProduit().'">
    <input type="text" name="prix"  value="'.$pUpdate->getPrix().'">
    <input type="text" name="dateDePeremption" value="'.$pUpdate->getDateDePeremption().'">
    <input type="submit" value="Envoyer le formulaire">

</form>

</body>
</html>';

