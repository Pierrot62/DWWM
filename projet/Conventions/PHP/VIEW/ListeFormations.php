<?php
$formations = FormationsManager::getList();
?>
<section class="colonne">
    <div class="zoneBouton">
        <div class="grande">
            <div><a href="index.php?page=FormFormation&mode=ajouter"><button class="bouton"><i
                            class="fas fa-plus-circle"></i> Ajouter</button></a></div>

            <div><a href="index.php?page=FormAdmin"><button class="bouton"><i class="far fa-arrow-alt-circle-left"></i>
                        Retour</button></a></div>
        </div>
        <div class="triple"></div>
    </div>
    <?php
    foreach($formations as $elt)
    {
        echo'<div class="info"><div class="grande">
                <div class=case>'.$elt->getLibelleFormation().'</div></div>
                <div class="triple"><div class="mini"></div><a href="index.php?page=FormFormation&mode=modifier&id='.$elt->getIdFormation().'"><button class=bouton><i class="fas fa-edit"></i> Modifier</button></a>
                <div class="mini"></div><a href="index.php?page=FormFormation&mode=supprimer&id='.$elt->getIdFormation().'"><button class="bouton"><i class="fas fa-trash-alt"></i> Supprimer</button></a></div></div>';
    }
    ?>

</section>