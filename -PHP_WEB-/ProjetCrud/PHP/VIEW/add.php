<?php
include ("head.php");

echo'
<form method="get" action="traitementAdd.php">

    <input type="hidden" name="IdProduit">
    <input type="text" name="libelleProduit">
    <input type="text" name="prix">
    <input type="text" name="dateDePeremption">
    <input type="submit" value="Envoyer le formulaire">

</form>

</body>
</html>';

