<?php
$formations = FormationsManager::getList();
?>
<section class="colonne">
    <h2 class="centre">Liste des formations</h2>
    <div><a href="index.php?page=FormFormation&mode=ajouter"><button class="bouton"><i class="fas fa-plus-circle"></i> Ajouter</button></a></div>
    <?php
    foreach($formations as $elt)
    {
        echo'<div class="info"><div class="grande">
                <div class=case>'.$elt->getLibelleFormation().'</div></div>
                <div class="triple"><div class="mini"></div><a href="index.php?page=FormFormation&mode=modifier&id='.$elt->getIdFormation().'"><button class=bouton><i class="fas fa-edit"></i> Modifier</button></a>
                <div class="mini"></div><a href="index.php?page=FormFormation&mode=supprimer&id='.$elt->getIdFormation().'"><button class="bouton"><i class="fas fa-trash-alt"></i> Supprimer</button></a></div></div>';
    }
    ?>
    <div><button class="bouton"><a href="index.php?page=default"><i class="far fa-arrow-alt-circle-left"></i> Retour</a></button></div>
</section>


