<?php
echo '
<section class="input">
<div></div>';

$idProduits = $_GET["id"];

$pUpdate = ProduitsManager::findById($idProduits);

echo'
<div class=\"titrePage\">Modifier le produit n°'.$pUpdate->getIdProduit().'</div>";
<form method="post" action="./index.php?traitement=update&codePage=traitement">

    <input type="hidden" name="IdProduit" value="'.$pUpdate->getIdProduit().'">
    <input type="text" name="libelleProduit" value="'.$pUpdate->getLibelleProduit().'">
    <input type="text" name="prix"  value="'.$pUpdate->getPrix().'">'
?>
<?php

    echo'<input type="date" name="dateDePeremption" value="'.$pUpdate->getDateDePeremption().'">
    <input class="edit" type="submit" value="Envoyer le formulaire">
    
</form>
<a href="index.php?codePage=accueil">Retour a la liste</a>
</section>
</body>
</html>';

