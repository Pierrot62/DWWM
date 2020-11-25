<?php
echo '
<section class="input">
<div></div>
';

echo'
<form method="post" action="index.php?traitement=add&code=traitement">

    <input type="hidden" name="IdProduit">
    <input type="text" placeholder="Libelle Du Produit" name="libelleProduit">
    <select name="idCategorie" id="pet-select">
        <option value="1">Alimentaire</option>
        <option value="2">Papeterie</option>
        <option value="3">Boisson</option>
    </select>
    <input type="text" placeholder="Prix Du Produit" name="prix">
    <input type="date" name="dateDePeremption">
    <input type="submit" value="Envoyer le formulaire">

</form>
<a href="index.php?code=defautl">Retour a la liste</a>

</section>
</body>
</html>';

