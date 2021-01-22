<section>

    <form action="" method="POST">

        <div class="row">
            <div></div>
            <div class="info colonne">
                <label for="numSiret">Numero SIRET :</label>
                <input type="text" id="siret" name="siret" title="Veuillez renseigner un numero de SIRET" value="" required pattern="\d{14}">
                <div id="divSiret" class="message erreur"></div>
            </div>
            <div></div>
        </div>
        <div class="row">
            <div class="info colonne">
                <label for="RaisonSociale">Raison Sociale :</label>
                <input type="text" id="raisonSociale" name="raison sociale" title="Veuillez renseigner votre raison sociale" required pattern="[a-zA-Z- ]{3,}">
                <div id="divRaisonSociale" class="message erreur"></div>
            </div>
            <div></div>
            <div class="info colonne">
                <label for="juridique">Forme Juridique :</label>
                <input type="text" id="formeJuridique" name="formeJuridique" title="Veuillez renseigner votre forme juridique" required pattern="[a-zA-Z- ]" value="">
                <div id="divFormeJuridique" class="message erreur"></div>
            </div>
        </div>

        <div class="row">
            <div class="info colonne">
                <label for="adresse">Adresse :</label>
                <input type="text" id="adresse" name="adresse" value="" title="Veuillez renseigner votre adresse" required pattern="[a-zA-Z- ][0-9]">
                <div id="divAdresse" class="message erreur"></div>
            </div>
            <div></div>
            <div class="info colonne">
                <label for="ville">Regions :</label>
                <select id="region">
                    <?php
                        $listeRegion = RegionsManager::getList(false);
                                foreach($listeRegion as $elt){
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
            <div></div>
            <div class="info colonne">
                <label for="ville">Ville :</label>
                <select id="ville">
                    <?php
                        $liste = VillesManager::getListByDepartement(59,false);
                        foreach($liste as $elt){
                            echo '<option value="'.$elt->getIdVille().'">'.$elt->getNomVille().'  '.$elt->getCodePostal().'</option>';
                        }
                    ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="info colonne">
                <label for="representantLegal">Representant Legal :</label>
                <input type="text" id="representantLegal" name="representantLegal" value="" title="Veuillez renseigner un représentant légal" required pattern="[a-zA-Z- ]{3,}"> 
                <div id="divRepresentantLegal" class="message erreur"></div>               
            </div>
            <div></div>
            <div class="info colonne">
                <label for="fonction">Fonction :</label>
                <input type="text" id="fonction" name="fonction" value="" required title="Veuillez renseigner une fonction" pattern="[a-zA-Z- ]{3,}" >
                <div id="divFonction" class="message erreur"></div>
            </div>
        </div>

        <div class="row">
            <div class="info colonne">
                <label for="adresseMail">Adresse Mail :</label>
                <input type="text" id="adresseMail" name="adresseMail" value="" required title="Veuillez renseigner une adresse mail" pattern="[a-z]+[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}" >
                <div id="divAdresseMail" class="message erreur"></div>
            </div>
            <div></div>
            <div class="info colonne">
                <label for="numeroTelephone">Numero Telephone :</label>
                <input type="text" id="numeroTel" name="numeroTel" value="" required title="Veuillez renseigner un numero de telephone" pattern="\d{10}" >
                <div id="divNumTelephone" class="message erreur"></div>
            </div>
        </div>

        <div class="row">
            <div class="info colonne">
                <label for="assureur">Assureur :</label>
                <input type="text" id="assureur" name="assureur" value="" required title="Veuillez renseigner un assureur" pattern="[a-zA-Z- ]{3,}" > 
                <div id="divAssureur" class="message erreur"></div>               
            </div>
            <div></div>
            <div class="info colonne">
                <label for="numeroSocietaire">Numero Societaire :</label>
                <input type="text" id="numeroSocietaire" name="numeroSocietaire" value="" title="Veuillez renseigner un numero societaire" required pattern="\d{16}" >
                <div id="divNumSocietaire" class="message erreur"></div>
            </div>
        </div>
<fieldset>
<legend>Tuteur</legend>
        <div class="row">
            <div class="info colonne">
                <label for="tuteur">Tuteur délégué par l'entreprise :</label>
                <input type="text" id="tuteur" name="tuteur" value="" required title="Veuillez renseigner un tuteur" pattern="[a-zA-Z- ]{3,}" > 
                <div id="divTuteur" class="message erreur"></div>               
            </div>
            <div></div>
            <div class="info colonne">
                <label for="fonctionTuteur">Fonction Tuteur :</label>
                <input type="text" id="fonctionTuteur" name="fonctionTuteur" value="" required title="Veuillez renseigner la fonction du tuteur" pattern="[a-zA-Z- ]{3,}" >
                <div id="divFonctionTuteur" class="message erreur"></div>
            </div>
        </div>

        <div class="row">
            <div class="info colonne">
                <label for="tuteur">Numero téléphone du tuteur :</label>
                <input type="text" id="numeroTuteur" name="numeroTuteur" value="" required title="Veuillez renseigner le numero de téléphone du tuteur" pattern="\d{10}" >  
                <div id="divNaumTelTuteur" class="message erreur"></div>              
            </div>
            <div></div>
            <div class="info colonne">
                <label for="fonctionTuteur">Mail Tuteur :</label>
                <input type="text" id="mailTuteur" name="mailTuteur" value="" required title="Veuillez renseigner l'adresse mail du tuteur" pattern="[a-z]+[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}">
                <div id="divMailTuteur" class="message erreur"></div>
            </div>
        </div>

        <div class="row">
            <div></div>
            <div class="info colonne">
                <button class="bouton" type="submit"><i class="far fa-check-circle"></i> Valider</button>             
            </div>
            <div></div>
        </div>
        
</fieldset>
    </form>

</section>