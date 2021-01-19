<?php

echo '<section class = "colonne">
        <div class = "case centre noborder">
            <h2>Liste des sessions</h2>
        </div>
        <div>
            <a href="Index.php?codePage=details&categorie=repres&mode=ajout">
                <button class="bouton"><i class="fas fa-plus-circle"></i> Ajouter</button>
            </a>
        </div>
        <div></div>
        <div class="info">
            <div class=" case double titreColonne">Libelle formation</div>
            <div class="case titreColonne">numéro d\'offre</div>
            <div class="double"></div></div>';
$tableau = SessionsFormationsManager::getList();
foreach ($tableau as $uneSession) {
    $formation = FormationsManager::findById($uneSession->getIdFormation());
    echo '  <div class="info">
                <div class="case double centre"> '.$formation->getLibelleFormation().'</div>
                <div class="case centre"> '.$uneSession->getNumOffreFormation().'</div>
                <div class="double centre">
                    <a href="Index.php?codePage=details&categorie=repres&mode=modif&id='.$uneSession->getIdSessionFormation().'">
                        <button class="bouton"><i class="fas fa-edit"></i> Modifier</button>
                    </a>
                    <div class="mini"></div>
                    <a href="Index.php?codePage=details&categorie=repres&mode=detail&id='.$uneSession->getIdSessionFormation().'">
                        <button class="bouton"><i class="fas fa-info-circle"></i> Détail</button>
                    </a>
                    <div class="mini"></div>
                    <a href="Index.php?codePage=details&categorie=repres&mode=delete&id='.$uneSession->getIdSessionFormation().'">
                        <button class="bouton"><i class="fas fa-trash-alt"></i> Supprimer</button>
                    </a>
                </div>
            </div>';
}
echo '</section>';