<?php
echo '
<section class="input">
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
<a href="index.php?code=defautl">Retour a la liste</a>

</section>
</body>
</html>';

