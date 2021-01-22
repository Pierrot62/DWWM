<section>

    <form action="" method="POST">
        <div class="info colonne">
            <label for="objectifPAE">Objectif PAE :</label>
            <textarea type="text" id="objectifPAE" name="objectif PAE"></textarea>
        </div>

        <div></div>
        <div class="info colonne">
            <label for="sujetStage">Sujet du stage :</label>
            <textarea type="text" required id="sujetStage" name="sujet du stage" pattern="[a-zA-Z- ]"></textarea>
        </div>

        <div class="row">
            <div></div>
            <div class="info colonne">
                <button class="bouton" type="submit"><i class="far fa-check-circle"></i> Valider</button>
            </div>
            <div></div>
        </div>

        <div>
            <div class="info">
                <span class="erreur"></span>
            </div>
        </div>

    </form>

</section>