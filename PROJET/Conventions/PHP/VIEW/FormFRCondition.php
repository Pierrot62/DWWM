<?php 
$idStage=$_GET['idStage'];
$stage = StagesManager::findById($idStage);
if ($stage==false) $stage = new Stages();
?>
<section>

    <!-- ******************Jours et heures de présence proposés****************** -->
    <form action="index.php?page=ActionFormFRCondition&mode=ajouter" name="condition" method="POST">
        <input type="hidden" name="idStage" value="<?= $idStage?>">
        <div class="horaire colonne">
            <!-- libelle horaire et valeur horaire -->
            <h3 class="centre texteClair">Jours et heures de présence proposés</h3>
            <div class="tab colonne">
                <div class="ligne ">
                    <div class="double"></div>
                    <div class="texteClair  ">Lundi</div>
                    <div class="texteClair  ">Mardi</div>
                    <div class="texteClair  ">Mercredi</div>
                    <div class="texteClair  ">Jeudi</div>
                    <div class="texteClair  ">Vendredi</div>
                    <div class="texteClair  ">Samedi</div>
                </div>
                <div class="ligne">
                    <div class="texteClair  double">Début de journée</div>
                    <?php
for ($i = 1; $i < 7; $i++)
{
    jours("horaireDebutJour", $i,$idStage);
}
?>

                </div>
                <div class="ligne">
                    <div class="texteClair  double">Début déjeuner</div>

                    <?php
for ($i = 1; $i < 7; $i++)
{
    jours("horaireDebutDej", $i,$idStage);
}
?>
                </div>
                <div class="ligne">
                    <div class="texteClair  double">Fin déjeuner</div>

                    <?php
for ($i = 1; $i < 7; $i++)
{
    jours("horaireFinDej", $i,$idStage);
}
?>
                </div>
                <div class="ligne">
                    <div class="texteClair  double">Fin de journée</div>
                    <?php
for ($i = 1; $i < 7; $i++)
{
    jours("horaireFinJour", $i,$idStage);
}
?>
                </div>
                <div class="espaceHor"></div>
                <div class="ligne">
                    <div class="texteClair double bordureVerte hauteurCase">Durée / jour</div>
                    <div class="bordureVerte texteClair centerItem duree" name="duree1"></div>
                    <div class="bordureVerte texteClair centerItem duree" name="duree2"></div>
                    <div class="bordureVerte texteClair centerItem duree" name="duree3"></div>
                    <div class="bordureVerte texteClair centerItem duree" name="duree4"></div>
                    <div class="bordureVerte texteClair centerItem duree" name="duree5"></div>
                    <div class="bordureVerte texteClair centerItem duree" name="duree6"></div>
                </div>
                <div class="texteClair ligne bordureVerte hauteurCase">Maximum 10 H / Jour, pause déjeuner incluse si
                    inférieure à 1 H</div>

                <div class="ligne">
                    <div class="texteClair demi bordureVerte hauteurCase">Durée hebdomadaire</div>
                    <div class="bordureVerte mini texteClair centerItem" id="dureeHebdo"></div>
                    <div class="texteClair bordureVerte hauteurCase">Minimum 30 heures – Maximum 35 heures chaque
                        semaine</div>
                </div>
            </div>
            <div class="texteClair">Compléter le formulaire bis pour chaque semaine si les horaires varient au cours des
                semaines d'accueil.
            </div>
        </div>
        <div class="espaceHor"></div>

        <!-- ******************Lieu de réalisation****************** -->


        <fieldset>
            <legend>Lieu de réalisation</legend>
            <!-- table stage -->
            <div class="info">
                <div class="label centre">Lieu de réalisation</div>
                <div class="mini"></div>
                <div class="info double colonne " groupe="ok">
                <?php 
                    $lieu = $stage->getLieuRealisation();
                    $lieux = explode(",",$lieu);
                    $valeurAutre ="";
                    /* On cherche un element contenant autre */
                        /* preg_grep cherche une valeur dans le tableau qui correspond à la regex*/
                    $result = preg_grep("/^autre/i", $lieux);
                    if (count($result)>0)
                    {   /* array_values réindexe le tableau pour emettre d'accéder à la 1ere valeur*/
                        $valeurAutre = substr(array_values($result)[0],5);
                    }
                        
                ?>
                    <div class="">
                        <div class="left">
                            <input type="checkbox" id="" name="lieuRealisation1" value="entreprise" 
                            <?php if (in_array("entreprise",$lieux)) echo " checked ";?>
                            >&nbsp
                            <label for="entreprise">Locaux de l'entreprise </label></div>
                        <div class="left">
                            <input type="checkbox" id="" name="lieuRealisation2" value="chantier"
                            <?php if (in_array("chantier",$lieux)) echo " checked ";?>
                            >&nbsp
                            <label for="Chantier">Chantier(s) </label>
                        </div>
                    </div>
                    <div class="">
                        <div class="left">
                            <input type="checkbox" id="" name="lieuRealisation3" value="clients"
                            <?php if (in_array("clients",$lieux)) echo " checked ";?>
                            >&nbsp
                            <label for="clients">Locaux des clients</label>
                        </div>
                        <div class="left centerItem">
                        
                            <input type="checkbox" autre="ok" id="" name="lieuRealisation4"
                            <?php if ($valeurAutre!="") echo " checked ";?>
                            >&nbsp
                            <label for="Lieu">Autre (préciser)</label>&nbsp
                            <input type="text" name="lieuRealisation5"<?php echo " value='".$valeurAutre."' ";?>>
                        </div>
                    </div>
                </div>

            </div>
            <div class="espaceHor"></div>

            <div class="info">
                <div class="label centre ">Déplacements occasionnés par le stage</div>
                <div class="mini"></div>

                <div class="info double left " groupe="ok">
                    <div class="left">
                        <input type="radio" id="" name="deplacement" value="1" required deplacement="ok"
                            <?php if ($stage->getDeplacement() == 1) echo " checked ";?>>&nbsp
                        <label for="oui">OUI</label></div>
                    <div class="left">
                        <input type="radio" id="" name="deplacement" value="0" deplacement="ko"
                            <?php if ($stage->getDeplacement() == 0) echo " checked ";?>>&nbsp
                        <label for="non">NON</label>
                    </div>
                </div>
            </div>
            <div class="espaceHor"></div>
            <div id="deplacement" class="<?php if ($stage->getDeplacement() == 0) echo "cache"; ?> colonne" deplacement="ok">
                <div class="info">
                    <div class="label centre ">Fréquence</div>
                    <div class="mini"></div>
                    <div class="info double colonne " groupe="<?php if ($stage->getDeplacement() == 0) echo "ko";else echo "ok"?>">
                        <div class="">
                            <div class="left">
                                <input type="radio" id="" name="frequenceDeplacement" value="Quotidien" required
                                    <?php if ($stage->getDeplacement() == "Quotidien") echo " checked ";?>>&nbsp
                                <label for="Quotidien">Quotidien </label>
                            </div>
                            <div class="left">
                                <input type="radio" id="" name="frequenceDeplacement" value="Occasionnels"
                                    <?php if ($stage->getDeplacement() == "Occasionnels") echo " checked ";?>>&nbsp
                                <label for="Occasionnels">Occasionnels </label>
                            </div>
                        </div>
                        <div class=" ">
                            <div class="left"></div>
                            <div class="left centerItem">
                                <input type="radio" autre="ok" id="" name="frequenceDeplacement" value="autre">&nbsp
                                <label for="Autre">Autre (préciser)</label>&nbsp
                                <input type="text" name="frequenceDeplacement1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="espaceHor"></div>
                <div class="info">
                    <div class="label centre ">Modes de déplacement</div>
                    <div class="mini"></div>
                    <div class="info double colonne " groupe="<?php if ($stage->getDeplacement() == 0) echo "ko";else echo "ok"?>">
                        <div class="">
                            <div class="left">
                                <input type="checkbox" id="" name="modeDeplacement1" value="vehicule de l'Entreprise">&nbsp
                                <label for="vehiculeEntreprise">Véhicule de l'entreprise </label>
                            </div>
                            <div class="left">
                                <input type="checkbox" id="" name="modeDeplacement2" value="vehicule de Stagiaire">&nbsp
                                <label for="vehiculeStagiaire">Véhicule personnel du stagiaire </label>
                            </div>
                        </div>
                        <div class="">
                            <div class="left"></div>
                            <div class="left centerItem">
                                <input type="checkbox" autre="ok" id="" name="modeDeplacement3">&nbsp
                                <label for="AutreModeDeplacement">Autre (préciser)</label>&nbsp
                                <input type="text" name="modeDeplacement4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="espaceHor"></div>

            <!-- ******************Les activités****************** -->
        </fieldset>
        <div class="espaceHor"></div>
        <div class="espaceHor"></div>
        <div class="espaceHor"></div>
        <fieldset>
            <legend>Les activités
            </legend>
            <div class="info">
                <div class="label centre ">demandent une attestation de formation règlementaire</div>
                <div class="mini"></div>
                <div class="info double colonne " groupe="ok">
                    <div class="">
                        <div class="left">
                            <input type="radio" autre="ok" id="" name="attFormReglement" value="1" required>&nbsp
                            <label for="attFormReglement">OUI</label>
                        </div>
                        <div class="left">
                            <input type="radio" id="" name="attFormReglement" value="0">&nbsp
                            <label for="attFormReglement">NON</label>
                        </div>
                    </div>
                    <div class="">
                        <div class="left centerItem">
                            <label for="libelleAttFormReg">laquelle : </label>&nbsp
                            <input type="text" name="libelleAttFormReg">
                        </div>
                        <div class="left"></div>
                    </div>
                </div>
            </div>
            <div class="espaceHor"></div>
            <div class="info">
                <div class="label centre ">exigent une visite médicale d'aptitude:</div>
                <div class="mini"></div>
                <div class="info double  " groupe="ok">
                    <div class="left">
                        <input type="radio" id="" name="visiteMedical" value="1" required <?php if ($stage->getVisiteMedical() == 1) echo " checked ";?>>&nbsp
                        <label for="visiteMedical">OUI</label>
                    </div>
                    <div class="left">
                        <input type="radio" id="" name="visiteMedical" value="0" <?php if ($stage->getVisiteMedical() == 0) echo " checked ";?>>&nbsp
                        <label for="visiteMedical">NON</label>
                    </div>
                </div>
            </div>
            <div class="espaceHor"></div>
            <div class="info">
                <div class="label centre ">comportent des travaux dangereux </div>
                <div class="mini"></div>
                <div class="info double " groupe="ok">
                    <div class="left">
                        <input type="radio" preciser="ok" id="" name="travauxDang" value="1" required <?php if ($stage->getDeplacement() == 1) echo " checked "?>>&nbsp
                        <label for="lieu">OUI</label>
                    </div>
                    <div class="left">
                        <input type="radio" preciser="ko" id="" name="travauxDang" value="0" <?php if ($stage->getDeplacement() == 0) echo " checked "?> >&nbsp
                        <label for="Chantier">NON</label>
                    </div>
                </div>
            </div>
            <div class="espaceHor"></div>
            <div class="info <?php if ($stage->getDeplacement() == 0) echo "cache"?>" preciser="ok">
                <div class="label centre ">Préciser</div>
                <div class="mini"></div>
                <div class="info double colonne" groupe="<?php if ($stage->getTravauxDang() == 0) echo "ko";else echo "ok"?>">
                    <div class="">
                        <div class="left">
                            <input type="checkbox" id="" name="td1" value="Agents chimiques dangereux">&nbsp
                            <label for="lieu">Agents chimiques dangereux </label>
                        </div>
                        <div class="left">
                            <input type="checkbox" id="" name="td2" value="Milieu confiné">&nbsp
                            <label for="Chantier"> Milieu confiné </label>
                        </div>
                    </div>
                    <div class="">
                        <div class="left">
                            <input type="checkbox" id="" name="td3" value="Agents biologiques">&nbsp
                            <label for="lieu">Agents biologiques </label>
                        </div>
                        <div class="left">
                            <input type="checkbox" id="" name="td4"
                                value="Travaux en contact avec du verre ou du métal en fusion">&nbsp
                            <label for="Chantier">Travaux en contact avec du verre ou du métal en fusion</label>
                        </div>
                    </div>

                    <div class="">
                        <div class="left">
                            <input type="checkbox" id="" name="td5" value="Vibrations mécaniques">&nbsp
                            <label for="lieu">Vibrations mécaniques</label>
                        </div>
                        <div class="left">
                            <input type="checkbox" id="" name="td6" value="Manutentions manuelles">&nbsp
                            <label for="Chantier">Manutentions manuelles</label>
                        </div>
                    </div>
                    <div class="">
                        <div class="left">
                            <input type="checkbox" id="" name="td7" value="Rayonnements">&nbsp
                            <label for="lieu">Rayonnements </label>
                        </div>
                        <div class="left">
                            <input type="checkbox" id="" name="td8" value="Risques électriques">&nbsp
                            <label for="Chantier">Risques électriques </label>
                        </div>
                    </div>
                    <div class="">
                        <div class="left">
                            <input type="checkbox" id="" name="td9" value="Milieu hyperbare">&nbsp
                            <label for="lieu">Milieu hyperbare </label>
                        </div>
                        <div class="left">
                            <input type="checkbox" id="" name="td10" value="Utilisation de machines">&nbsp
                            <label for="Chantier">Utilisation de machines </label>
                        </div>
                    </div>
                    <div class="">
                        <div class="left">
                            <input type="checkbox" id="" name="td11" value="Températures extrêmes">&nbsp
                            <label for="lieu">Températures extrêmes</label>
                        </div>
                        <div class="left">
                            <input type="checkbox" id="" name="td12" value="Travaux en hauteur">&nbsp
                            <label for="Chantier">Travaux en hauteur </label>
                        </div>
                    </div>
                    <div class="">
                        <div class="left">
                            <input type="checkbox" id="" name="td13" value="Effondrement et ensevelissement">&nbsp
                            <label for="lieu">Effondrement et ensevelissement </label>
                        </div>
                        <div class="left">
                            <input type="checkbox" id="" name="td14" value="Contact avec des animaux">&nbsp
                            <label for="Chantier">Contact avec des animaux</label>
                        </div>
                    </div>
                    <div class="">
                        <div class="left">
                            <input type="checkbox" id="" name="td15" value="Appareils sous pression">&nbsp
                            <label for="lieu">Appareils sous pression</label>
                        </div>
                        <div class="left">
                        </div>
                    </div>

                </div>
            </div>



        </fieldset>
        <div class="espaceHor"></div>
        <div class="info  center">
            <button class="bouton" type="submit"><i class="fas fa-paper-plane"></i>&nbsp Envoyer</button>
        </div>
        <div class="espaceHor"></div>

        <div class="espaceHor"></div>

    </form>
</section>


<?php
function jours($momentJours, $numJours,$idStage)
{
    $idLib = (LibellesHorairesManager::getByLibelle($momentJours . $numJours))->getIdLibelleHoraire();
    $valeurHoraire = ValeursHorairesManager::getListByStageEtLibelle($idStage,$idLib);
    if ($valeurHoraire == false) // s'il n'y a pas de données dans la base
    {   // on crée un objet vide pour éviter les erreurs
        $valeurHoraire=new ValeursHoraires();
    }
    echo '<div class=""><input type="time" name="' . $momentJours . $numJours . '" value ="'.$valeurHoraire->getValeurHoraire().'"></div>';
}

?>