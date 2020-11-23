<?php
echo '
<section>
<div><a class="new" href="PHP/VIEW/add.php">Ajouter un produit</a></div>
<div></div>
';

echo'
<form method="post" action="index.php?traitement=add&code=traitement">

    <input type="hidden" name="IdProduit">
    <input type="text" name="libelleProduit">
    <input type="text" name="prix">
    <input type="date" name="dateDePeremption">
    <input type="submit" value="Envoyer le formulaire">

</form>

</body>
</html>';

