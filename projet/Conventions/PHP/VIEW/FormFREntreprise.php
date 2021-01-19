<section>

    <form action="" method="POST">

        <div class="">
            <div></div>
            <div class="info colonne">
                <label for="numSiret">Numero SIRET :</label>
                <input type="text" id="siret" name="siret" value="" required pattern="\d{14}">
            </div>
            <div></div>
        </div>
        <div class="row">
            <div class="info colonne">
                <label for="RaisonSociale">Raison Sociale :</label>
                <input type="text" required id="raisonSociale" name="raison sociale" pattern="[a-zA-Z- ]">
            </div>
            <div></div>
            <div class="info colonne">
                <label for="juridique">Forme Juridique</label>
                <input type="text" id="formeJuridique" name="formeJuridique" required pattern="[a-zA-Z- ]" value="">
            </div>
        </div>

        <div class="row">
            <div class="info colonne">
                <label for="adresse">Adresse :</label>
                <input type="text" id="adresse" name="adresse" value="" required pattern="[a-zA-Z- ][0-9]">
            </div>
            <div></div>
            <div class="info colonne">
            <label for="ville">Ville :</label>
            <select>
                <?php
                    $liste = VillesManager::getList(false);
                    foreach($liste as $elt){
                        $sel="";
                        echo '<option value="'.$elt->getNomVille().'"'.$sel.'>'.$elt->getCodePostal().'</option>';
                    }
                ?>
            </select>
            </div>
        </div>

        <div class="row">
            <div class="info colonne">
                <label for="representantLegal">Representant Legal :</label>
                <input type="text" id="representantLegal" name="representantLegal" value="" required pattern="[a-zA-Z- ]{3,}" >                
            </div>
            <div></div>
            <div class="info colonne">
                <label for="fonction">Fonction :</label>
                <input type="text" id="fonction" name="fonction" value="" required pattern="[a-zA-Z- ]{3,}" >
            </div>
        </div>

        <div class="row">
            <div class="info colonne">
                <label for="adresseMail">Adresse Mail :</label>
                <input type="text" id="adresseMail" name="adresseMail" value="" required pattern="[a-z]+[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}" >                
            </div>
            <div></div>
            <div class="info colonne">
                <label for="numeroTelephone">Numero Telephone :</label>
                <input type="text" id="numeroTel" name="numeroTel" value="" required pattern="\d{10}" >
            </div>
        </div>

        <div class="row">
            <div class="info colonne">
                <label for="assureur">Assureur :</label>
                <input type="text" id="assureur" name="assureur" value="" required pattern="[a-zA-Z- ]" >                
            </div>
            <div></div>
            <div class="info colonne">
                <label for="numeroSecuritaire">Numero Securitaire :</label>
                <input type="text" id="numeroSecuritaire" name="numeroSecuritaire" value="" required pattern="" >
            </div>
        </div>

        <div class="row">
            <div class="info colonne">
                <label for="tuteur">Tuteur délégué par l'entreprise :</label>
                <input type="text" id="tuteur" name="tuteur" value="" required pattern="[a-zA-Z- ]" >                
            </div>
            <div></div>
            <div class="info colonne">
                <label for="fonctionTuteur">Fonction Tuteur :</label>
                <input type="text" id="fonctionTuteur" name="fonctionTuteur" value="" required pattern="[a-zA-Z- ]" >
            </div>
        </div>

        <div class="row">
            <div class="info colonne">
                <label for="tuteur">Numero téléphone du tuteur :</label>
                <input type="text" id="numTuteur" name="numTuteur" value="" required pattern="\d{10}" >                
            </div>
            <div></div>
            <div class="info colonne">
                <label for="fonctionTuteur">Mail Tuteur :</label>
                <input type="text" id="mailTuteur" name="mailTuteur" value="" required pattern="[a-z]+[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}">
            </div>
        </div>

        <div class="row">
            <div></div>
            <div class="info colonne">
                <button class="bouton" type="submit"><i class="far fa-check-circle"></i> Valider</button>             
            </div>
            <div></div>
            <div class="info colonne">
                <button class="bouton" type="submit"><i class="far fa-arrow-alt-circle-left"></i> Retour</button>
            </div>
            <div></div>
        </div>

        <div >
            <div class="info">
                <span class="erreur"></span>
            </div>
        </div>

    </form>

</section>