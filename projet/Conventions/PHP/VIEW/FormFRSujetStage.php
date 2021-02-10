
<?php
    $idStage = $_GET['idStage'];
    $stage = StagesManager::findById($idStage);
    $periodesStages = PeriodesStagesManager::findById($stage->getIdPeriode());
?>
<section>

    <form action="index.php?page=ActionFormFRSujetStage" method="POST">
        <div class="info colonne">
            <label for="objectifPAE">Objectif PAE :</label>
            <input type="hidden" name="objectifPAE" value="<?php echo($periodesStages->getObjectifPAE()) ?>">
            <textarea type="text" disabled id="objectifPAE"  ><?php echo($periodesStages->getObjectifPAE()) ?></textarea>
        </div>

        <div></div>
        <div class="info colonne">
            <label for="sujetStage">Sujet du stage :</label>
            <textarea type="text" require id="sujetStage" value="<?php echo($stage->getSujetStage()) ?>" name="sujetStage" pattern="[a-zA-Z- ]"><?php echo($stage->getSujetStage()) ?></textarea>
        </div>

        <div class="row">
            <div></div>
            <div class="info colonne">
                <button class="bouton" type="submit"><i class="far fa-check-circle"></i> Valider</button>
            </div>
            <div></div>
        </div>
        <input type="hidden" name="idStage" value="<?php echo($idStage) ?>">
        <input type="hidden" name="etape" value="4">
        <div>
            <div class="info">
                <span class="erreur"></span>
            </div>
        </div>

    </form>

</section>