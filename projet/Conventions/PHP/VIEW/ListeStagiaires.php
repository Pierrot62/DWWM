<?php
$stagiaires=StagiairesManager::getList();
?>
<section class="colonne">
<div class="zoneBouton">
        <div class="grande">
            <div><a href="index.php?page=FormStagiaire&mode=ajouter"><button class="bouton"><i
                            class="fas fa-plus-circle"></i> &nbsp Ajouter</button></a></div>
                            <div><a href="Index.php?page=FormStagiaireMasse"><button class="bouton"><i class="fas fa-plus-circle"></i> &nbsp Ajouter en masse</button></a></div>
            <div><a href="index.php?page=FormAdmin"><button class="bouton"><i class="far fa-arrow-alt-circle-left"></i>
                        Retour</button></a></div>
        </div>
        <div class="triple"></div>
    </div>
  
    
    <div class="espaceHor"></div>
    <div class="info">
        <div class="case bordureTitre">Nom du stagiaire</div>
        <div class="case bordureTitre">Prénom du stagiaire</div>
        <div class="case bordureTitre">Numéro de bénéficiaire</div>
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
</section>