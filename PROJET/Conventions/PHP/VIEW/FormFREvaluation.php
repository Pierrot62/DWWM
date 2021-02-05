<section>

    <form action="index.php?page=ActionEvaluation&mode=ajouter" method="POST">
        <div class="contenu colonne">
            <div class="row">
                <div class="info colonne titreColonne">
                    <label>Les Comportements Professionnels (note de 1 à 5)</label>
                    <div></div>
                </div>
            </div>
            <?php
                for($i=1; $i<=11; $i++) 
                {
                    $libelle = LibellesComportementsProfessionnelsManager::findById($i);
                    $valeurs = ValeursComportementsProfessionnelsManager::findById($i);
                    if (!$valeurs) $valeurs = new ValeursComportementsProfessionnels();
                    echo '<input type="hidden" name = "idLibelleComportementProfessionnel'.$i.'" value='.$valeurs->getIdLibelleComportementProfessionnel().'>';
                    echo '<input type="hidden" name = "idComportementProfessionnel'.$i.'" value='.$valeurs->getIdComportementProfessionnel().'>';
                    echo '<input type="hidden" name = "idStage" value='.$valeurs->getIdStage().'>';
                    
                echo '<div class="row">
                    <div class="mini"></div>

                    <div class="info colonne">
                        <div id="libelleComportement" class="blanc centre">
                             <div class="texteClair left">'.$libelle->getLibelleComportement().'</div>
                        </div>
                    </div>

                    <div>
                        <input type="range" name="valeurComportement'.$i.'" id="valeurComportement" min="1" max="5" step="1" list="tickmarks" style="width:50%">
                        <datalist id="tickmarks">
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                        <option value="5"></option>
                        </datalist>
                    </div>

                    <div class="mini"></div>
                </div>';
                }
            ?>
            

            <div class="espaceHor"></div>
            <div class="espaceHor"></div>

            <div class="row">
                <div class="info colonne titreColonne">
                    <label>Les Acquis</label>
                    <div></div>
                </div>
            </div>

            <div class="row blanc colonne" id="test">
                <!-- la création des inputs se fait dans la partie javascript --> 
            </div>

            <div class="row">
            <div></div>
            <div class="info colonne">
                <button id ="valide" class="bouton" type="submit" disabled><i class="far fa-check-circle"></i> Valider</button>             
            </div>
            <div></div>
        </div>
        </div>
    </form>

</section>