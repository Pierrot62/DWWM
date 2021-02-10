<section class = "colonne">
<?php

$mode = $_GET['mode'];
$idSession = $_GET['id'];

echo '<div class="colonne info" >';

echo '<form  action="index.php?page=ActionSession&mode=ajoutPer" method="POST">';
          

echo '  <div>
            <div class="mini"></div>
            <input type="hidden" name="idSessionFormation" value="' . $idSession . '"/>
            <div class = " colonne">
                <label for="dateDebutPAE">Date de début de stage: </label>
                <input class="dateDebutPAE" type="date" name="dateDebutPAE" />
                <div class=" erreur"></div>
            </div>
            <div class="mini"></div>
            <div class=" colonne" >
                <label for="dateFinPAE">Date de fin de stage: </label>
                <input class="dateFinPAE" type="date" name="dateFinPAE" />
                <div class=" erreur"></div>
            </div>
            <div class="mini"></div>
        </div>
        <div>
            <div>
                <div class="mini"></div>
                <div class=" colonne" >
                    <label for="dateRapportSuivi">Date Rapport de suivi: </label>
                    <input class="dateRapportSuivi" type="date" name="dateRapportSuivi" />
                    <div class=" erreur"></div>
                </div>
                <div class="mini"></div>
            </div>
            <div></div>
        </div>
        <div>
            <div class="mini"></div>
            <div class=" colonne" >
                <label for="objectifPAE">Objectif de stage: </label>
                <input class="objectifPAE" type="textarea" name="objectifPAE" />
            </div>
            <div class="mini"></div>
        </div>
        <div class="espaceHor"></div>
        <div class="info">
            <button class="bouton" type="submit">Valider</button>
            <div class="mini"></div>
            <button id="ajout1p" class="bouton" type="submit"><i class="fas fa-edit"></i> Ajout Periode</button>
            <div class="mini"></div>
            <a href="Index.php?page=ListeSessions"><button class="bouton"><i class="far fa-arrow-alt-circle-left"></i>  &nbsp Retour</button></a>
            <div class="mini"></div>
        </div>
    </form>';
    ?>
</div>

</section>


