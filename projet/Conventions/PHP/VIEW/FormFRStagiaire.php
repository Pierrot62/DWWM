<?php
if ($_SESSION['utilisateur']->getIdRole() == 4)
{
    $email = $_SESSION['utilisateur']->getEmailUtilisateur();
    $stagiaire = StagiairesManager::getByEmail($email);
    $nbPeriodesStages = StagiaireFormationManager::nbPeriodesStages($stagiaire->getIdStagiaire(), null);
    $participation = ParticipationsManager::getByStagiaire($stagiaire->getIdStagiaire());
    $ListePeriodeStage = StagiaireFormationManager::getListByStagiaire($stagiaire->getIdStagiaire());
}
/* GESTION DES PERIODES DE PAE*/
echo ' <section>';
/* PLUSIEURS PAE  et aucune choisie*/
if (!isset($_GET['idPeriode']) && $nbPeriodesStages > 1)
{
    $i = 0;
    $j = 1;
    while ($i < $nbPeriodesStages)
    {
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
            <div class="colonne center">
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
}
else 
{/* une periode choisie  ou une seule periode*/
    if (isset($_GET['idPeriode']))
    {
        for ($i = 0; $i < count($ListePeriodeStage); $i++)
        {
            if ($ListePeriodeStage[$i]->getIdPeriode() == $_GET['idPeriode'])
            {
                $indice = $i; // c'est la periode choisie
            }

        }
    }
    else /* Il y a une seule periode*/
    {
        $indice = 0;
    }
    echo '
            <form action="index.php?page=ActionFormFRStagiaire" method="POST">
                <div class="info centre colonne">
                   <h1>Fiche d information pour la periode de stage</h1>
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
    if ($stagiaire->getGenreStagiaire() == "M")
    {
        echo ' checked ';
    }
    echo ' name="genreStagiaire" value="H">
                    </div>
                    <div class="info  centerItem colonne">
                        <label for="femme">Femme</label>
                        <input type="radio" required id="genreStagiaire"';
    if ($stagiaire->getGenreStagiaire() == "F")
    {
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
            </form>';
}
echo '</section>';
