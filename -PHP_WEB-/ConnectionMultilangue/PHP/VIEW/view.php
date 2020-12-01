<?php

$idProduits = $_GET["id"];

$pUpdate = ProduitsManager::findById($idProduits);

echo'
<section class="input">
<div>
<div></div>
<form method="get" action="traitement.php">

    <input type="hidden" name="IdProduit" value="'.$pUpdate->getIdProduit().'">
    <input type="text" disabled name="nomProduit" value="'.$pUpdate->getLibelleProduit().'">
    <input type="text" disabled name="prixProduit"  value="'.$pUpdate->getPrix().'">
    <input type="text" disabled name="dateDePeremption" value="'.$pUpdate->getDateDePeremption().'">
</form>
<div></div>
<a href="index.php?codePage=accueil">Retour a la liste</a>
</section>
</div>
</body>
</html>';
