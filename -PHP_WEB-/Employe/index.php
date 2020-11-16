<?php
include "head.php";
include "test.php";
echo '<body>';


for ($i=0; $i < count($e); $i++) { 
    echo $e[$i]->getagence().' '.$e[$i]->getService().' '.$e[$i]->getNom().' '.$e[$i]->getPrenom();
    echo '<br>';
}

    ?>
</body>
</html>