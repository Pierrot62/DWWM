<?php

echo '<section class = "colonne">
<div class="zoneBouton">
        <div class="grande">
            <div>
                <a href="index.php?page=FormSession&mode=ajout">
                    <button class="bouton"><i class="fas fa-plus-circle"></i> &nbsp Ajouter</button>
                </a>
            </div>

            <div><a href="index.php?page=FormAdmin"><button class="bouton"><i class="far fa-arrow-alt-circle-left"></i>
                        Retour</button></a></div>
        </div>
        <div class="triple"></div>
    </div>
        
       
        <div class="info">
            <div class=" case double titreColonne">Libelle formation</div>
            <div class="case titreColonne">numéro d\'offre</div>
            <div class="double">
            </div></div>';
$tableau = SessionsFormationsManager::getList();
foreach ($tableau as $uneSession) {
    $formation = FormationsManager::findById($uneSession->getIdFormation());
    echo '  <div class="info">
                <div class="case double centre"> '.$formation->getLibelleFormation().'</div>
                <div class="case centre"> '.$uneSession->getNumOffreFormation().'</div>
                <div class="double centre">
                    <a href="Index.php?page=FormSession&mode=modif&id='.$uneSession->getIdSessionFormation().'">
                        <button class="bouton"><i class="fas fa-edit"></i> Modifier</button>
                    </a>
                    <div class="mini"></div>
                    <a href="Index.php?page=FormSession&mode=detail&id='.$uneSession->getIdSessionFormation().'">
                        <button class="bouton"><i class="fas fa-info-circle"></i> Détail</button>
                    </a>
                    <div class="mini"></div>
                    <a href="Index.php?page=FormSession&mode=delete&id='.$uneSession->getIdSessionFormation().'">
                        <button class="bouton"><i class="fas fa-trash-alt"></i> Supprimer</button>
                    </a>
                </div>
            </div>';
}
echo '</section>';