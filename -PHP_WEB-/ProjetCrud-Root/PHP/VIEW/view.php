<?php

$idProduits = $_GET["id"];

$pUpdate = ProduitsManager::findById($idProduits);

echo'
<section class="input">
<div>
<div></div>
<form method="get" action="traitement.php">

    <input type="hidden" name="IdProduit" value="'.$pUpdate->getIdProduit().'">
    <input type="text" name="nomProduit" value="'.$pUpdate->getLibelleProduit().'">
    <input type="text" name="prixProduit"  value="'.$pUpdate->getPrix().'">
    <input type="text" name="categorie" calue=""
    <input type="text" name="dateDePeremption" value="'.$pUpdate->getDateDePeremption().'">
</form>
<div></div>
<a href="index.php?code=defautl">Retour a la liste</a>
</section>
</div>
</body>
</html>';
