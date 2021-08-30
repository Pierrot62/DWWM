<?php

$listeVille = VilleManager::getList();
foreach ($listeVille as $uneVille)
{
    echo '<div class="espace"></div>';
    echo '<div class="colonne center">';
    echo $uneVille->getNomVille();
    echo '<button class="btnVille"><a href="index.php?codePage=formVille&mode=modif&id='.$uneVille->getIdVille().'">Modification</a></button>'; 
    echo '</div>';
}

echo '</div>';
