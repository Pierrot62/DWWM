<?php
// $idStagiaire = $_GET['']
$idStage = $_GET['idStage'];
$stages = StagesManager::findById($idStage);
$tuteur = TuteursManager::findById($stages->getIdTuteur());
$entreprise = EntreprisesManager::findById($tuteur->getIdEntreprise());

echo '<section>

            <div class="menu centre">
                <div class="elmMenu"><a  class="centerItem centerSelf double lien" href="index.php?page=FormFRInfosStagiaire&idStagiaire=' . $stages->getIdStagiaire() . '&idStage=' . $stages->getIdStage() . '">Informations Stagiaires</a></div>
                <div class="elmMenu"><a  class="centerItem centerSelf double lien" href="index.php?page=FormFREntreprise&idEntreprise=' . $tuteur->getIdEntreprise() . '&idStage=' . $stages->getIdStage() . '&idTuteur=' . $stages->getIdTuteur() . '">Informations Entreprise</a></div>
                <div class="elmMenu"><a  class="centerItem centerSelf double lien" href="index.php?page=FormFRCondition&idStage=' . $stages->getIdStage() . '>Conditions <br>de stage</a></div>
                <div class="elmMenu"><a  class="centerItem centerSelf double lien" href="index.php?page=FormFRSujetStage&idStage=' . $stages->getIdStage() . '">Sujet de<br> Stage</a></div>
                <div class="elmMenu"><a  class="centerItem centerSelf double lien" href="index.php?page=FormFREvalution&idStage=' . $stages->getIdStage() . '">Evaluation</a></div>
            </div>

        </section>
        <div></div>
        </div>
        <div class="container">
        <div></div>
    ';