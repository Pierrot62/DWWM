<?php
include ("head.php");
include ("header.php");

$idProduits = $_GET["id"];

$pUpdate = ProduitsManager::findById($idProduits);

echo'
<div>
<div></div>
<form method="get" action="traitement.php">

    <input type="hidden" name="IdProduit" value="'.$pUpdate->getIdProduit().'">
    <input type="text" name="nomProduit" value="'.$pUpdate->getLibelleProduit().'">
    <input type="text" name="prixProduit"  value="'.$pUpdate->getPrix().'">
    <input type="text" name="dateDePeremption" value="'.$pUpdate->getDateDePeremption().'">
    <a href="index.php?code="default">Retour a la liste</a>
</form>
<div></div>
</div>
</body>
</html>';
include ("footer.php");
