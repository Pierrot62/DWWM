<?php
$stagiaires=StagiairesManager::getList();
?>
<section class="colonne">
    <h2 class="centre">Liste des stagiaires</h2>
    <div><a href="Index.php?page=FormStagiaire&mode=ajouter"><button class="bouton"><i class="fas fa-plus-circle"></i> Ajouter</button></a></div>
    <div class="espaceHor"></div>
    <div class="info">
        <div class="case titreColonne">Nom du stagiaire</div>
        <div class="case titreColonne">Prénom du stagiaire</div>
        <div class="case titreColonne">Numéro de bénéficiaire</div>
        <div class="double"></div>
    </div>

    <?php
    foreach($stagiaires as $elt)
    {
        echo'<div class="info">
                <div class="case">'.$elt->getNomStagiaire().'</div>
                <div class="case">'.$elt->getPrenomStagiaire().'</div>
                <div class="case">'.$elt->getNumBenefStagiaire().'</div>
                <div class="double centre">
                <div class="triple"><div class="mini"></div><a href="index.php?page=FormStagiaire&mode=modifier&id='.$elt->getIdStagiaire().'"><button class=bouton><i class="fas fa-edit"></i> Modifier</button></a></div>
                <div class="triple"><div class="mini"></div><a href="index.php?page=FormStagiaire&mode=details&id='.$elt->getIdStagiaire().'"><button class=bouton><i class="fas fa-edit"></i> Afficher</button></a></div>
                <div class="triple"><div class="mini"></div><a href="index.php?page=FormStagiaire&mode=supprimer&id='.$elt->getIdStagiaire().'"><button class=bouton><i class="fas fa-edit"></i> Supprimer</button></a></div></div></div>';
    } 
    ?>
    <div><button class="bouton"><a href="index.php?page=default"><i class="far fa-arrow-alt-circle-left"></i> Retour</a></button></div>
</section>