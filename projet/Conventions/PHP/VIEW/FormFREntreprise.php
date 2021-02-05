<section>

<?php
// $mode=$_GET['mode'];

// switch($mode)
// {
//     case "ajouter":
//     {
//         echo'<form action="Index.php?page=ActionEntreprise&mode=ajouter" method="POST">';
//         break;
//     }
// }
?>
    <form action="index.php?page=ActionEntreprise&mode=ajouter" method="POST">
        <fieldset>
            <legend>Entreprise</legend>
            <div class="row">
            <div class="demi"></div>
                <div class="info colonne">
                    <label for="numSiret">Numero SIRET :</label>
                    <input type="text" id="siret" name="numSiretENT" title="Veuillez renseigner un numero de SIRET" value="" required pattern="\d{14}">
                    <div id="divSiret" class="message erreur"></div>
                </div>
            <div class="demi"></div>
            </div>
        <div class="colonne" id="test">
            <div class="row">
                <div class="info colonne">
                    <label for="RaisonSociale">Raison Sociale :</label>
                    <input type="text" id="raisonSociale" name="raisonSociale" title="Veuillez renseigner votre raison sociale" required pattern="[a-zA-Z\ \.-]{3,}">
                    <div id="divRaisonSociale" class="message erreur"></div>
                </div>
                <div class="mini"></div>
                <div class="info colonne">
                    <label for="juridique">Forme Juridique :</label>
                    <input type="text" id="formeJuridique" name="statutJuridiqueENT" title="Veuillez renseigner votre forme juridique" required pattern="[a-zA-Z\ \.-]{1,}" value="">
                    <div id="divFormeJuridique" class="message erreur"></div>
                </div>
            </div>

            <div class="row">
                <div class="info colonne">
                    <label for="adresse">Adresse Entreprise:</label>
                    <input type="text" id="adresseEntreprise" name="adresseENT" value="" title="Veuillez renseigner votre adresse" required pattern="^([0-9a-zA-Z'àâéèêôùûçÀÂÉÈÔÙÛÇ\s-\ \.]{1,150})$">
                    <div id="divAdresseEntreprise" class="message erreur"></div>
                </div>
                <div class="mini"></div>
                <div class="info colonne">
                    <label for="ville">Regions :</label>
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
                    <label for="numeroTelephone">Numero Telephone Entreprise:</label>
                    <input type="text" id="numeroTelEnt" name="telENT" value="" required title="Veuillez renseigner un numero de telephone de l'entreprise" pattern="\d{10}" >
                    <div id="divNumTelephoneEnt" class="message erreur"></div>
                </div>
            </div>

            <div class="row">
                <div class="info colonne">
                    <label for="numeroSocietaire">Numero Societaire :</label>
                    <input type="text" id="numeroSocietaire" name="numSocietaire" value="" title="Veuillez renseigner un numero societaire" required pattern="[0-9]{3,}" >
                    <div id="divNumSocietaire" class="message erreur"></div>
                </div>
                <div class="mini"></div>
                <div class="info colonne">
                    <label for="assureur">Assureur Entreprise:</label>
                    <input type="text" id="assureur" name="assureurENT" value="" required title="Veuillez renseigner un assureur" pattern="[a-zA-Z\ \.-]{3,}" > 
                    <div id="divAssureur" class="message erreur"></div>               
                </div>
            </div>

            <div class="row">
                <div class="info colonne">
                    <label for="nomRepresentant">Nom Representant :</label>
                    <input type="text" id="nomRepresentant" name="nomRepresentant" value="" title="Veuillez renseigner le nom du représentant" required pattern="[a-zA-Z\ -]{2,}"> 
                    <div id="divNomRepres" class="message erreur"></div>               
                </div>
                <div class="mini"></div>
                <div class="info colonne">
                    <label for="prenomRepresentant">Prenom Representant :</label>
                    <input type="text" id="prenomRepresentant" name="prenomRepresentant" value="" required title="Veuillez renseigner le prenom du représentant" pattern="[a-zA-Z\ -]{3,}" >
                    <div id="divPrenomRepres" class="message erreur"></div>
                </div>
            </div>

            <div class="row">
                <div class="info colonne">
                    <label for="fonction">Fonction Representant:</label>
                    <input type="text" id="fonctionRepresentant" name="fctRepresentant" value="" required title="Veuillez renseigner la fonction du représentant" pattern="[a-zA-Z\ -]{3,}" >
                    <div id="divFonctionRepresentant" class="message erreur"></div>
                </div>
                <div class="mini"></div>
                <div class="info colonne">
                    <label for="adresseMail">Adresse Mail Representant:</label>
                    <input type="text" id="adresseMailRepresentant" name="mailRepresentant" value="" required title="Veuillez renseigner une adresse mail" pattern="[a-z]+[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}" >
                    <div id="divAdresseMailRepresentant" class="message erreur"></div>
                </div>
            </div>

            <div class="row">
                <div class="info colonne">
                    <label for="numeroTelephone">Numero Telephone Representant:</label>
                    <input type="text" id="numeroTelRepresentant" name="telRepresentant" value="" required title="Veuillez renseigner un numero de telephone" pattern="\d{10}" >
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
                    <input type="text" id="nomTuteur" name="nomTuteur" value="" required title="Veuillez renseigner le nom du Tuteur" pattern="[a-zA-Z-\ ]{2,}" > 
                    <div id="divNomTuteur" class="message erreur"></div>               
                </div>
                <div class="mini"></div>
                <div class="info colonne">
                    <label for="prenomTuteur">Prenom Tuteur :</label>
                    <input type="text" id="prenomTuteur" name="prenomTuteur" value="" required title="Veuillez renseigner le prenom du Tuteur" pattern="[a-zA-Z-\ ]{3,}" > 
                    <div id="divPrenomTuteur" class="message erreur"></div>               
                </div>
            </div>

            <div class="row">
                <div class="info colonne">
                    <label for="fonctionTuteur">Fonction Tuteur :</label>
                    <input type="text" id="fonctionTuteur" name="fonctionTuteur" value="" required title="Veuillez renseigner la fonction du tuteur" pattern="[a-zA-Z-\ ]{3,}" >
                    <div id="divFonctionTuteur" class="message erreur"></div>
                </div>
                <div class="mini"></div>
                <div class="info colonne">
                    <label for="tuteur">Numero téléphone du tuteur :</label>
                    <input type="text" id="numeroTuteur" name="telTuteur" value="" required title="Veuillez renseigner le numero de téléphone du tuteur" pattern="\d{10}" >  
                    <div id="divNumTelTuteur" class="message erreur"></div>              
                </div>
            </div>

            <div class="row">
                <div class="info colonne">
                    <label for="fonctionTuteur">Mail Tuteur :</label>
                    <input type="text" id="mailTuteur" name="emailTuteur" value="" required title="Veuillez renseigner l'adresse mail du tuteur" pattern="[a-z]+[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}">
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