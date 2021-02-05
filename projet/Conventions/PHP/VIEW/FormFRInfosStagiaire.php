<?php

$stagiaire = StagiaireFormationManager::getListByStagiaire($_GET['idStagiaire']);
$session = AnimationsManager::getByFormation($stagiaire[0]->getIdFormation());
$formateur = UtilisateursManager::findById($session[0]->getIdUtilisateur());

function formatDate($date){
    
    $annee = substr($date, 0, 4);
    $mois = substr($date, 5, 2);
    $jour = substr($date, 8, 2);

    return $jour.'-'.$mois.'-'.$annee;

}

echo'<div class="info centerItem colonne">
                
                <div>
                    <div class="info colonne center">
                        <label for="nom">Nom :</label>
                        <input type="text" disabled id="nom" name="nom" value="' . $stagiaire[0]->getNomStagiaire() .'">
                    </div>
                    <div class="info colonne center">
                        <label for="prenom">Prenom :</label>
                        <input type="text" disabled id="prenom" name="prenom" value="' .  $stagiaire[0]->getPrenomStagiaire() . '" required>
                    </div>
                </div>
                <div>
                    <div class="info colonne center">
                        <label for="numBenefStagiaire">numero de beneficiaire :</label>
                        <input type="text" disabled id="numBenefStagiaire" name="numBenefStagiaire" value="' .  $stagiaire[0]->getNumBenefStagiaire() . '" required pattern="\d{8}">
                    </div>
                    <div class="info colonne center">
                        <label for="dateNaissanceStagiaire">date de naissance :</label>
                        <input type="text" disabled id="dateNaissanceStagiaire" name="dateNaissanceStagiaire" value="' .  formatDate($stagiaire[0]->getDateNaissanceStagiaire()) . '" required>
                    </div>
                </div>
                <div>
                    <div class="info colonne center">
                        <label for="numSecu">Numero de securité social :</label>
                        <input type="text" disabled id="numSecu" name="numSecu" value="' .  $stagiaire[0]->getNumSecuStagiaire() . '" >
                    </div>
                    <div class="info colonne center">
                        <label for="Formateur">Formateur(trice)</label>
                        <input type="text" disabled id="Formateur" name="Formateur" value="' . $formateur->getNomUtilisateur() . ' ' .$formateur->getPrenomUtilisateur().'">
                    </div>
                </div>
                <div>
                    <div class="info colonne center">
                        <label for="numOffre">n°Offre</label>
                        <input type="text" disabled id="numOffre" name="numOffre" value="' .  $stagiaire[0]->getNumOffreFormation() . '" required pattern="\d{8}">
                    </div>
                    <div class="info colonne center">
                        <label for="Periode">Periode en entreprise</label>
                        <input type="text" disabled id="Periode" name="Periode" value="' .  formatDate($stagiaire[0]->getDateDebutPAE()) . ' au ' .  formatDate($stagiaire[0]->getDateFinPAE()) . '" required>
                    </div>
                </div>
</div>';