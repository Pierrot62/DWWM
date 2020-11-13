<?php
include "head.php";
include "main.php";
echo '<body>';


for ($i=0; $i < count($totoMobile); $i++) { 
    echo $totoMobile[$i]->getMarque().' '.$totoMobile[$i]->getModele();
}

    ?>
</body>
</html>