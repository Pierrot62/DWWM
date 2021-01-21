<?php

    //ACTION DES BOUTONS DE SELECTION DE PERIODES DE STAGES//


    $utilisateur = new Utilisateurs (["idUtilisateur" => 2, "nomUtilisateur" => "COURQUIN", "prenomUtilisateur" => "Pierre", "emailUtilisateur" => "toto6@test.fr" , "mdpUtilisateur" => "user" , "datePeremption" => "", "idRole" => 4]);
    // $a1 = new agence(["Nom" => "tutu", "adresse" => "12 rue toto","restauration" => "restaurant d'entreprise" ,"codePostal" => "59520" , "ville" => "Lille"]);
    $_SESSION['utilisateur'] = $utilisateur;
    if ($_SESSION['utilisateur']->getIdRole() == 4) {
        $email = $_SESSION['utilisateur']->getEmailUtilisateur();
        $stagiaire = StagiairesManager::getByEmail($email);
        $nbPeriodesStages = StagiaireFormationManager::nbPeriodesStages($stagiaire->getIdStagiaire(),NULL);
        // var_dump($stagiaire);
        $participation = ParticipationsManager::getByStagiaire($stagiaire->getIdStagiaire());
        // var_dump($participation);
        $periodeStage = StagiaireFormationManager::getListByStagiaire($stagiaire->getIdStagiaire());
        // var_dump($periodeStage);
    }
    echo' <section>';
        // $nbPeriodesStages = 5;
    if (!isset($_GET['idPeriode']) && $nbPeriodesStages > 1) {
        $i = 0;
        $j = 1;
        while ($i < $nbPeriodesStages) {
            //DECOUPAGE DE LA DATE POUR LA METTRE AU FORMAT JJ/MM/AAAA
            $dateDebut = $periodeStage[$i]->getDateDebutPAE();
            $anneeDebut = substr($dateDebut , 0 , 4);
            $moisDebut = substr($dateDebut, 5 , 2);
            $jourDebut = substr($dateDebut, 8 , 2);
            $dateFin = $periodeStage[$i]->getDateFinPAE();
            $anneeFin = substr($dateFin , 0 , 4);
            $moisFin = substr($dateFin, 5 , 2);
            $jourFin = substr($dateFin, 8 , 2);
        
            echo '
            <div class="colonne center">
                <div>Periode de stage '. $j.'</div>
                <div>Du '.$jourDebut.'/'.$moisDebut.'/'.$anneeDebut.' au  '.$jourFin.'/'.$moisFin.'/'.$anneeFin.' </div>

                <a class="centre" href="index.php?page=FormFRStagiaire&idPeriode='.$periodeStage[$i]->getIdPeriode().'">
                    <button type="submit" class="bouton">Completer la fiche info  </button>
                </a>
            </div>
            ';
            $i++; 
            $j++;
        }
        } else if (isset($_GET["idPeriode"])){
            $valuePeriodeStage = StagiaireFormationManager::getListBySession($_GET["idPeriode"]);
            // var_dump($valuePeriodeStage);
            //  DECOUPAGE DE LA DATE POUR LA METTRE AU FORMAT JJ/MM/AAAA
            //  $dateDebut = $valuePeriodeStage[1]->getDateDebutPAE();
            //  $anneeDebut = substr($dateDebut , 0 , 4);
            //  $moisDebut = substr($dateDebut, 5 , 2);
            //  $jourDebut = substr($dateDebut, 8 , 2);
            //  $dateFin = $valuePeriodeStage[1]->getDateFinPAE();
            //  $anneeFin = substr($dateFin , 0 , 4);
            //  $moisFin = substr($dateFin, 5 , 2);
            //  $jourFin = substr($dateFin, 8 , 2);
            // <div>Du '.$jourDebut.'/'.$moisDebut.'/'.$anneeDebut.' au  '.$jourFin.'/'.$moisFin.'/'.$anneeFin.' </div>

            echo'
            <form action="index.php?page=ActionFormFRStagiaire" method="POST">
                <div class="info centre colonne">
                   <h1>Fiche d information pour la periode de stage</h1>
                    <h1>Du '.$periodeStage[$_GET['idPeriode']-1]->getDateDebutPAE().' au '.$periodeStage[$_GET['idPeriode']-1]->getDateFinPAE().' </h1>
                </div>
                <div class="info">
                    <div class="info colonne ">
                        <label for="prenomStagiaire">prenomStagiaire :</label>
                        <input type="text" id="prenomStagiaire" name="prenomStagiaire" value="'.$stagiaire->getPrenomStagiaire().'" required pattern="[a-zA-Z- ]{3,}">
                    </div>
                    <div class="info colonne">
                        <label for="nomStagiaire">nomStagiaire :</label>
                        <input type="text" id="nomStagiaire" name="nomStagiaire" value="'.$stagiaire->getNomStagiaire().'" required pattern="[a-zA-Z- ]{3,}">
                    </div>
                </div>
                <div >';
                if ($stagiaire->getGenreStagiaire() == "M") {
                    echo'
                    <div class="info  centerItem colonne">
                        <label for="homme">Homme</label>
                        <input type="radio" required id="genreStagiaire" checked name="genreStagiaire" value="H">
                    </div>
                    <div class="info  centerItem colonne">
                        <label for="femme">Femme</label>
                        <input type="radio" required id="genreStagiaire" name="genreStagiaire" value="F">
                    </div>';
                }
                else{
                    echo'
                    <div class="info  centerItem colonne">
                        <label for="homme">Homme</label>
                        <input type="radio" required id="genreStagiaire" name="genreStagiaire" value="H">
                    </div>
                    <div class="info  centerItem colonne">
                        <label for="femme">Femme</label>
                        <input type="radio" required id="genreStagiaire" checked name="genreStagiaire" value="F">
                    </div>';
                }
                   
                    echo'
                    <div class="info colonne  grande">
                        <label for="numSecuStagiaire">Votre Numero de securite social :</label>
                        <input type="text" id="numSecuStagiaire" name="numSecuStagiaire" required pattern="\d{13}" value="'.$stagiaire->getNumSecuStagiaire().'">
                    </div>
                </div>

                <div>
                    <div class="info colonne center">
                        <label for="numBenefStagiaire">Votre numero de beneficiaire :</label>
                        <input type="text" id="numBenefStagiaire" name="numBenefStagiaire" value="'.$stagiaire->getNumBenefStagiaire().'" required pattern="\d{8}">
                    </div>
                    <div class="info colonne center">
                        <label for="dateNaissanceStagiaire">Votre date de naissance :</label>
                        <input type="date" id="dateNaissanceStagiaire" name="dateNaissanceStagiaire" value="'.$stagiaire->getDateNaissanceStagiaire().'" required>
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
                    <input type="hidden" name="idStagiaire" value="'.$stagiaire->getIdStagiaire().'" >
                    <input type="hidden" name="emailStagiaire" value="'.$stagiaire->getEmailStagiaire().'" >
                    <input type="hidden" name="idRole" value="3">
                    <input type="hidden" id="mdpUtilisateur" name="mdpUtilisateur" value="" >
                    <input type="hidden" id="emailUser" name="emailUtilisateur" value="">
                    <input type="hidden" name="etape" value="1">
                    <input type="hidden" name="idPeriode" value="'.$_GET["idPeriode"].'">
                    <input type="hidden" name="dateDebut" value="'.$periodeStage[$_GET['idPeriode']-1]->getDateDebutPAE().'">
                    <input type="hidden" name="dateFin" value="'.$periodeStage[$_GET['idPeriode']-1]->getDateFinPAE().'">
                    <input type="hidden" name="objectifPAE" value="'.$periodeStage[$_GET['idPeriode']-1]->getObjectifPAE().'">


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
        else {

        echo ' 
       

            
        <form action="" method="POST">
        <div class="info centre colonne">
           <h1>Fiche d information pour la periode de stage</h1>

        </div>
        <div class="info colonne">
            <div class="info colonne ">
                <label for="prenom">Prenom :</label>
                <input type="text" id="prenom" name="prenom" value="'.$stagiaire->getPrenomStagiaire().'" required pattern="[a-zA-Z- ]{3,}">
            </div>
            <div class="info colonne ">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" value="'.$stagiaire->getNomStagiaire().'" required pattern="[a-zA-Z- ]{3,}">
            </div>
        </div>
        <div >
            <div class="info  centerItem colonne">
                <label for="homme">Homme</label>
                <input type="radio" required id="genre" name="genre" value="H">
            </div>
            <div class="info  centerItem colonne">
                <label for="femme">Femme</label>
                <input type="radio" required id="genre" name="genre" value="F">
            </div>
            <div class="info colonne  grande">
                <label for="numSecu">Votre Numero de securite social :</label>
                <input type="text" id="numSecu" name="numSecu" required pattern="\d{13}" value="'.$stagiaire->getNumSecuStagiaire().'">
            </div>
        </div>

        <div >
            <div class="info colonne center">
                <label for="numbenef">Votre numero de beneficiaire :</label>
                <input type="text" id="numBenef" name="numbenef" value="'.$stagiaire->getNumBenefStagiaire().'" required pattern="\d{8}">
            </div>
            <div class="info colonne center">
                <label for="ddn">Votre date de naissance :</label>
                <input type="date" id="ddn" name="ddn" value="'.$stagiaire->getDateNaissanceStagiaire().'" required>
            </div>
        </div>

        <div >
            <div class="info colonne center">
                <label for="emailTuteur">Email de votre tuteur :</label>
                <input type="text" id="emailTuteur" name="emailTuteur" value="" required pattern="^[a-z]+[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$" >                
            </div>
        </div>
        <div >
            <div class="info colonne center">
                <button class="bouton" type="submit"><i class="fas fa-paper-plane"></i> Envoyer</button>
            </div>
        </div>
        <div >
            <div class="info center">
                <span class="erreur"></span>
            </div>
        </div>

    </form>

        ';
    }
    echo'</section>';
?>