<?php

if ($_SESSION['utilisateur']->getIdRole() == 3) {
    $tuteur = TuteursManager::getByEmail($_SESSION['utilisateur']->getEmailUtilisateur());
    $stages = StagesManager::getByTuteur($tuteur->getIdTuteur());
    if ($stages > 1) {
        for ($i = 0; $i < count($stages); $i++) {
            $idStagiaire = $stages[$i]->getIdStagiaire();
            $stagiaires = StagiairesManager::findById($idStagiaire);
            echo '
            <section>
            <div class="colonne center">
                <div>' . $stagiaires->getPrenomStagiaire() . '</div>
                <a href="index.php?page=MenuFR
                    <button type="submit" class="bouton">Completer la fiche info  </button>
                </a>
            </div>
            </section>';
        }
    }

}

?>

<section>

    <div class="menu centre">
        <div class="elmMenu"><a  class="centerItem double lien" href="index.php?page=FormFRStagiaire">Informations Stagiaires</a></div>
        <div class="elmMenu"><a  class="centerItem double lien" href="index.php?page=FormFREntreprise">Informations Entreprise</a></div>
        <div class="elmMenu"><a  class="centerItem double lien" href="index.php?page=FormFRCondition">Conditions <br>de stage</a></div>
        <div class="elmMenu"><a  class="centerItem double lien" href="index.php?page=FormFRSujetStage">Sujet de<br> Stage</a></div>
        <div class="elmMenu"><a  class="centerItem double lien" href="index.php?page=FormFREvalution">Evaluation</a></div>
    </div>

</section>
<div></div>
</div>
<div class="container">
<div></div>
