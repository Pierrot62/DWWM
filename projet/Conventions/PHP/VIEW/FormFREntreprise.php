<section>
<?php
$id = $_GET["idEntreprise"];
$entreprise = EntreprisesManager::findById($id);
if($entreprise==null) $entreprise= new Entreprises();
$idTuteur = $_GET["idTuteur"];
$tuteur = TuteursManager::findById($idTuteur);
?> 
    <form action="index.php?page=ActionEntreprise&mode=ajouter" method="POST">
        <fieldset>
            <legend>Entreprise</legend>
            <div class="row">
            <div class="demi"></div>
                <div class="info colonne">
                    <label for="numSiret">Numéro SIRET :</label>
                    <?php  
                        echo '<input verifInput type="text" id="siret" name="numSiretENT" title="Veuillez renseigner un numero de SIRET" value="'.$entreprise->getNumSiretEnt().'" required pattern="\d{14}">';
                    ?>
                    <div id="divSiret" class="message erreur"></div>
                </div>
            <div class="demi"></div>
            </div>
        <div class="colonne" id="test">
            <div class="row">
                <div class="info colonne">
                    <label for="RaisonSociale">Raison Sociale :</label>
                    <?php  
                        echo '<input verifInput type="text" id="raisonSociale" name="raisonSociale" title="Veuillez renseigner votre raison sociale" value ="'.$entreprise->getRaisonSociale().'" required pattern="[a-zA-Z\ \.-]{3,}"/>';
                    ?>
                    <div id="divRaisonSociale" class="message erreur"></div>
                </div>
                <div class="mini"></div>
                <div class="info colonne">
                    <label for="juridique">Forme Juridique :</label>
                    <?php  
                        echo '<input verifInput type="text" id="formeJuridique" name="statutJuridiqueENT" title="Veuillez renseigner votre forme juridique" required pattern="[a-zA-Z\ \.-]{1,}" value="'.$entreprise->getStatutJuridiqueEnt().'">';
                    ?>
                    <div id="divFormeJuridique" class="message erreur"></div>
                </div>
            </div>

            <div class="row">
                <div class="info colonne">
                    <label for="adresse">Adresse Entreprise:</label>
                    <?php  
                        echo '<input verifInput type="text" id="adresseEntreprise" name="adresseENT" value="'.$entreprise->getAdresseEnt().'" title="Veuillez renseigner votre adresse" required pattern="^([0-9a-zA-Z\'àâéèêôùûçÀÂÉÈÔÙÛÇ\s-\ \.]{1,150})$"/>';
                    ?>
                    <div id="divAdresseEntreprise" class="message erreur"></div>
                </div>
                <div class="mini"></div>
                <div class="info colonne">
                    <label for="ville">Régions :</label>
                    <select id="region" name="idRegion">
                        <?php
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
                        ?>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="info colonne">
                    <label for="ville">Ville :</label>
                    <select id="ville" name="idVille">
                        <?php
                            $liste = VillesManager::getListByDepartement(59,false);
                            foreach($liste as $elt){
                                echo '<option value="'.$elt->getIdVille().'">'.$elt->getNomVille().'  '.$elt->getCodePostal().'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="mini"></div>
                <div class="info colonne">
                    <label for="numeroTelephone">Numéro Téléphone Entreprise:</label>
                    <?php  
                        echo '<input verifInput type="text" id="numeroTelEnt" name="telENT" value="'.$entreprise->getTelEnt().'" required title="Veuillez renseigner un numero de telephone de l\'entreprise" pattern="\d{10}"/>';
                    ?>
                    <div id="divNumTelephoneEnt" class="message erreur"></div>
                </div>
            </div>

            <div class="row">
                <div class="info colonne">
                    <label for="numeroSocietaire">Numéro Sociétaire :</label>
                    <?php  
                        echo '<input verifInput type="text" id="numeroSocietaire" name="numSocietaire" value="'.$entreprise->getNumSocietaire().'" title="Veuillez renseigner un numero societaire" required pattern="[0-9]{3,}" />';
                    ?>
                    <div id="divNumSocietaire" class="message erreur"></div>
                </div>
                <div class="mini"></div>
                <div class="info colonne">
                    <label for="assureur">Assureur Entreprise:</label>
                    <?php  
                        echo '<input verifInput type="text" id="assureur" name="assureurENT" value="'.$entreprise->getAssureurEnt().'" required title="Veuillez renseigner un assureur" pattern="[a-zA-Z\ \.-]{3,}" />';
                    ?> 
                    <div id="divAssureur" class="message erreur"></div>               
                </div>
            </div>

            <div class="row">
                <div class="info colonne">
                    <label for="nomRepresentant">Nom Représentant :</label>
                    <?php  
                        echo '<input verifInput type="text" id="nomRepresentant" name="nomRepresentant" value="'.$entreprise->getNomRepresentant().'" title="Veuillez renseigner le nom du représentant" required pattern="[a-zA-Z\ -]{2,}"/>';
                    ?> 
                    <div id="divNomRepres" class="message erreur"></div>               
                </div>
                <div class="mini"></div>
                <div class="info colonne">
                    <label for="prenomRepresentant">Prenom Représentant :</label>
                    <?php  
                        echo '<input verifInput type="text" id="prenomRepresentant" name="prenomRepresentant" value="'.$entreprise->getPrenomRepresentant().'" required title="Veuillez renseigner le prenom du représentant" pattern="[a-zA-Z\ -]{3,}" />';
                    ?> 
                    <div id="divPrenomRepres" class="message erreur"></div>
                </div>
            </div>

            <div class="row">
                <div class="info colonne">
                    <label for="fonction">Fonction Représentant:</label>
                    <?php  
                        echo '<input verifInput type="text" id="fonctionRepresentant" name="fctRepresentant" value="'.$entreprise->getFctRepresentant().'" required title="Veuillez renseigner la fonction du représentant" pattern="[a-zA-Z\ -]{3,}" />';
                    ?>
                    <div id="divFonctionRepresentant" class="message erreur"></div>
                </div>
                <div class="mini"></div>
                <div class="info colonne">
                    <label for="adresseMail">Adresse Mail Représentant:</label>
                    <?php  
                        echo '<input verifInput type="text" id="adresseMailRepresentant" name="mailRepresentant" value="'.$entreprise->getMailRepresentant().'" required title="Veuillez renseigner une adresse mail" pattern="[a-z]+[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}" />';
                    ?>
                    <div id="divAdresseMailRepresentant" class="message erreur"></div>
                </div>
            </div>

            <div class="row">
                <div class="info colonne">
                    <label for="numeroTelephone">Numéro Téléphone Représentant:</label>
                    <?php  
                        echo '<input verifInput type="text" id="numeroTelRepresentant" name="telRepresentant" value="'.$entreprise->getTelRepresentant().'" required title="Veuillez renseigner un numero de telephone" pattern="\d{10}" />';
                    ?>
                    <div id="divNumTelephoneRepresentant" class="message erreur"></div>
                </div>
                <div class="mini"></div>
                <div class="info colonne"></div>
            </div>
        </div>
        </fieldset>

        <div class="espaceHor"></div>
        <div class="espaceHor"></div>

        <fieldset>
            <legend>Tuteur</legend>
            <div class="row">
                <div class="info colonne">
                    <label for="nomTuteur">Nom Tuteur :</label>
                    <?php 
                        echo '<input verifInput type="text" id="nomTuteur" name="nomTuteur" value='.$tuteur->getNomTuteur().' required title="Veuillez renseigner le nom du Tuteur" pattern="[a-zA-Z-\ ]{2,}">';    
                    ?> 
                    <div id="divNomTuteur" class="message erreur"></div>               
                </div>
                <div class="mini"></div>
                <div class="info colonne">
                    <label for="prenomTuteur">Prénom Tuteur :</label>
                    <?php 
                        echo '<input verifInput type="text" id="prenomTuteur" name="prenomTuteur" value='.$tuteur->getPrenomTuteur().' required title="Veuillez renseigner le prenom du Tuteur" pattern="[a-zA-Z-\ ]{3,}">';    
                    ?>
                    <div id="divPrenomTuteur" class="message erreur"></div>               
                </div>
            </div>

            <div class="row">
                <div class="info colonne">
                    <label for="fonctionTuteur">Fonction Tuteur :</label>
                    <?php 
                        echo '<input verifInput type="text" id="fonctionTuteur" name="fonctionTuteur" value="'.$tuteur->getFonctionTuteur().'" required title="Veuillez renseigner la fonction du tuteur" pattern="[a-zA-Z-\ ]{3,}">';    
                    ?>
                    <div id="divFonctionTuteur" class="message erreur"></div>
                </div>
                <div class="mini"></div>
                <div class="info colonne">
                    <label for="tuteur">Numéro téléphone du tuteur :</label>
                    <?php 
                        echo '<input verifInput type="text" id="numeroTuteur" name="telTuteur" value="'.$tuteur->getTelTuteur().'" required title="Veuillez renseigner le numero de téléphone du tuteur" pattern="\d{10}">';    
                    ?>
                    <div id="divNumTelTuteur" class="message erreur"></div>              
                </div>
            </div>

            <div class="row">
                <div class="info colonne">
                    <label for="fonctionTuteur">Mail Tuteur :</label>
                    <?php 
                        echo '<input verifInput type="text" id="mailTuteur" name="emailTuteur" value='.$tuteur->getEmailTuteur().' required title="Veuillez renseigner l\'adresse mail du tuteur" pattern="[a-z]+[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}">';    
                    ?>
                    <div id="divMailTuteur" class="message erreur"></div>
                </div>
                <div class="mini"></div>
                <div class="info colonne"></div>
            </div>
        </fieldset>

        <div class="row">
            <div></div>
            <div class="info colonne">
                <button id ="valide" class="bouton" type="submit" disabled><i class="far fa-check-circle"></i> Valider</button>             
            </div>
            <div></div>
        </div>
    </form>
</section>