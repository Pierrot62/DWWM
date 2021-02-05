<?php
if ($_SESSION['utilisateur']->getIdRole() == 4) {
    $email = $_SESSION['utilisateur']->getEmailUtilisateur();
    $stagiaire = StagiairesManager::getByEmail($email);
    $nbPeriodesStages = StagiaireFormationManager::nbPeriodesStages($stagiaire->getIdStagiaire(), null);
    $participation = ParticipationsManager::getByStagiaire($stagiaire->getIdStagiaire());
    $ListePeriodeStage = StagiaireFormationManager::getListByStagiaire($stagiaire->getIdStagiaire());
}
/* GESTION DES PERIODES DE PAE*/
echo ' <section>';
/* PLUSIEURS PAE  et aucune choisie*/
if (!isset($_GET['idPeriode']) && $nbPeriodesStages > 1) {
    $i = 0;
    $j = 1;
    while ($i < $nbPeriodesStages) {
        //DECOUPAGE DE LA DATE POUR LA METTRE AU FORMAT JJ/MM/AAAA
        $dateDebut = $ListePeriodeStage[$i]->getDateDebutPAE();
        $anneeDebut = substr($dateDebut, 0, 4);
        $moisDebut = substr($dateDebut, 5, 2);
        $jourDebut = substr($dateDebut, 8, 2);
        $dateFin = $ListePeriodeStage[$i]->getDateFinPAE();
        $anneeFin = substr($dateFin, 0, 4);
        $moisFin = substr($dateFin, 5, 2);
        $jourFin = substr($dateFin, 8, 2);

        echo '
            <div class="colonne center titreColonne">
                <div>Periode de stage ' . $j . '</div>
                <div>Du ' . $jourDebut . '/' . $moisDebut . '/' . $anneeDebut . ' au  ' . $jourFin . '/' . $moisFin . '/' . $anneeFin . ' </div>

                <a class="centre" href="index.php?page=FormFRStagiaire&idPeriode=' . $ListePeriodeStage[$i]->getIdPeriode() . '">
                    <button type="submit" class="bouton">Completer la fiche info  </button>
                </a>
            </div>
            ';
        $i++;
        $j++;
    }
} else { /* une periode choisie  ou une seule periode*/
    if (isset($_GET['idPeriode'])) {
        for ($i = 0; $i < count($ListePeriodeStage); $i++) {
            if ($ListePeriodeStage[$i]->getIdPeriode() == $_GET['idPeriode']) {
                $indice = $i; // c'est la periode choisie
            }

        }
    } else /* Il y a une seule periode*/
    {
        $indice = 0;
    }
    echo '
    

            <form action="index.php?page=ActionFormFRStagiaire" method="POST">
            <fieldset>
            <legend>Informations Stagiaire</legend>
                <div class="info centre colonne titreColonne">
                   <h1>Fiche d\'information pour la periode de stage</h1>
                    <h1>Du ' . $ListePeriodeStage[$indice]->getDateDebutPAE() . ' au ' . $ListePeriodeStage[$indice]->getDateFinPAE() . ' </h1>
                </div>
                <div class="info">
                    <div class="info colonne ">
                        <label for="prenomStagiaire">prenomStagiaire :</label>
                        <input type="text" id="prenomStagiaire" name="prenomStagiaire" value="' . $stagiaire->getPrenomStagiaire() . '" required pattern="[a-zA-Z- ]{3,}">
                    </div>
                    <div class="info colonne">
                        <label for="nomStagiaire">nomStagiaire :</label>
                        <input type="text" id="nomStagiaire" name="nomStagiaire" value="' . $stagiaire->getNomStagiaire() . '" required pattern="[a-zA-Z- ]{3,}">
                    </div>
                </div>
                <div >';
    echo '
                    <div class="info  centerItem colonne">
                        <label for="homme">Homme</label>
                        <input type="radio" required id="genreStagiaire"';
    if ($stagiaire->getGenreStagiaire() == "M") {
        echo ' checked ';
    }
    echo ' name="genreStagiaire" value="H">
                    </div>
                    <div class="info  centerItem colonne">
                        <label for="femme">Femme</label>
                        <input type="radio" required id="genreStagiaire"';
    if ($stagiaire->getGenreStagiaire() == "F") {
        echo ' checked ';
    }
    echo 'name="genreStagiaire" value="F">
                    </div>';
    echo '
                    <div class="info colonne  grande">
                        <label for="numSecuStagiaire">Votre Numero de securite social :</label>
                        <input type="text" id="numSecuStagiaire" name="numSecuStagiaire" required pattern="\d{13}" value="' . $stagiaire->getNumSecuStagiaire() . '">
                    </div>
                </div>
                <div>
                    <div class="info colonne center">
                        <label for="numBenefStagiaire">Votre numero de beneficiaire :</label>
                        <input type="text" id="numBenefStagiaire" name="numBenefStagiaire" value="' . $stagiaire->getNumBenefStagiaire() . '" required pattern="\d{8}">
                    </div>
                    <div class="info colonne center">
                        <label for="dateNaissanceStagiaire">Votre date de naissance :</label>
                        <input type="date" id="dateNaissanceStagiaire" name="dateNaissanceStagiaire" value="' . $stagiaire->getDateNaissanceStagiaire() . '" required>
                    </div>
                </div>
                <div>
                    <div class="info colonne center">
                    <label for="ville">Regions d\'habitation :</label>
                    <select id="regionHabitation" name="idRegionHabitation">';
                        
                        $listeRegion = RegionsManager::getList(false);
                            foreach($listeRegion as $elt)
                            {
                                echo '<option value="'.$elt->getIdRegion().'" type="R">'.$elt->getLibelleRegion().'</option>';
                                $listeDepartement = DepartementsManager::getByRegion($elt->getIdRegion());
                        
                                foreach($listeDepartement as $dep)
                                {
                                    if($dep->getLibelleDepartement() == $reg)
                                    {
                                        $sel="selected";
                                    }
                                    else{
                                        $sel="";
                                    }
                                    echo '<option value="'.$dep->getIdDepartement().'" type="D" '.$sel.'>&nbsp &nbsp &nbsp'.$dep->getLibelleDepartement().'</option>';             
                                }
                            }
                        
                    echo'</select>
                    </div>
                    <div class="info colonne center">
                    <label for="ville">Ville d\'habitation :</label>
                    <select id="villeHabitation" name="idVilleHabitation">';
                    $villeStagiaire = VillesManager::findById($stagiaire->getIdVilleHabitation(),false);
                            $liste = VillesManager::getListByDepartement(59,false);
                            foreach($liste as $elt){
                                echo '<option value="'.$elt->getIdVille().'">'.$elt->getNomVille().'  '.$elt->getCodePostal().'</option>';
                            }
                        
                    echo'</select>
                    </div>
                </div>
                <div>
                    <div class="info colonne center">
                    <label for="ville">Regions de naissance :</label>
                    <select id="regionNaissance" name="idRegionNaissance">';
                        
                        $listeRegion = RegionsManager::getList(false);
                            foreach($listeRegion as $elt)
                            {
                                echo '<option value="'.$elt->getIdRegion().'" type="R">'.$elt->getLibelleRegion().'</option>';
                                $listeDepartement = DepartementsManager::getByRegion($elt->getIdRegion());
                        
                                foreach($listeDepartement as $dep)
                                {
                                    if($dep->getLibelleDepartement() == "Nord")
                                    {
                                        $sel="selected";
                                    }
                                    else{
                                        $sel="";
                                    }
                                    echo '<option value="'.$dep->getIdDepartement().'" type="D" '.$sel.'>&nbsp &nbsp &nbsp'.$dep->getLibelleDepartement().'</option>';             
                                }
                            }
                        
                    echo'</select>
                    </div>
                    <div class="info colonne center">
                    <label for="ville">Ville de naissance :</label>
                    <select id="villeNaissance" name="idVilleNaissance">';
                            $liste = VillesManager::getListByDepartement(59,false);
                            foreach($liste as $elt){
                                echo '<option value="'.$elt->getIdVille().'">'.$elt->getNomVille().'  '.$elt->getCodePostal().'</option>';
                            }
                        
                    echo'</select>
                    </div>
                </div>
                <div>
                    <div class="info">
                        <div class="info colonne">
                            <label for="nom">Votre numero de telephone :</label>
                            <input type="text" id="telStagiaire" name="telStagiaire" value="'.$stagiaire->getTelStagiaire().'" required pattern="\d{10}">
                        </div>
                        <div class="info colonne">
                            <label for="nom">Votre adresse :</label>
                            <input type="text" id="adresse" name="adresse" value="'.$stagiaire->getAdresse().'" required pattern="^([0-9a-zA-Z\'àâéèêôùûçÀÂÉÈÔÙÛÇ\s-\ \.]{1,150})$">
                        </div>
                    </div>
                </div>
                </fieldset>
                <div class="espaceHor"></div>
                <fieldset>
                <legend>Informations tuteur</legend>
                <div>
                    <div class="info">
                        <div class="info colonne ">
                            <label for="prenom">Prenom du Tuteur :</label>
                            <input type="text" id="prenomTuteur" name="prenomTuteur" value="" required pattern="[a-zA-Z- ]{3,}">
                        </div>
                        <div class="info colonne">
                            <label for="nom">Nom du Tuteur :</label>
                            <input type="text" id="nomTuteur" name="nomTuteur" value="" required pattern="[a-zA-Z- ]{3,}">
                        </div>
                    </div>
                </div>
                <div >
                    <div class="info colonne center">
                        <label for="emailTuteur">Email du Tuteur :</label>
                        <input type="text" id="emailTuteur" name="emailTuteur" value="" required pattern="^[a-z]+[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$" >
                    </div>
                </div>
                    <input type="hidden" name="idStagiaire" value="' . $stagiaire->getIdStagiaire() . '" >
                    <input type="hidden" name="emailStagiaire" value="' . $stagiaire->getEmailStagiaire() . '" >

                    <input type="hidden" name="idPeriode" value="' . $ListePeriodeStage[$indice]->getIdPeriode() . '">
                <div>
                    <div class="info  center">
                        <a href="index.php?page=FormFRStagiaire" class="bouton"><i class="far fa-arrow-alt-circle-left"></i> Retour</a>
                        <button class="bouton" type="submit"><i class="fas fa-paper-plane"></i> Envoyer</button>
                    </div>
                </div>
                <div >
                    <div class="info center">
                        <span class="erreur"></span>
                    </div>
                </div>
                </fieldset>
            </form>';
}
echo '</section>';
