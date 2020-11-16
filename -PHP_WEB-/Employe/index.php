<?php
include "head.php";
include "test.php";
echo '<body>';
echo '
<div class="banner">
<div>Agence</div>
<div>Service</div>
<div>Nom</div>
<div>Prenom</div>
</div>
';

for ($i=0; $i < count($e); $i++) { 
    echo '<div class="employe"><a href="detail.php?id='.$e[$i]->getIdEmploye().' ">
    <div class="elmEmploye">'.$e[$i]->getAgence()->getNom().'</div>'.'<div class="elmEmploye">'.$e[$i]->getService().' </div>'.'<div class="elmEmploye">'.$e[$i]->getIdEmploye().'</div> '.'<div class="elmEmploye">'.$e[$i]->getPrenom().'</div><a/></div>';
}

    ?>
</body>
</html>