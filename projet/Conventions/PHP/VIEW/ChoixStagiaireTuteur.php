<?php

if ($_SESSION['utilisateur']->getIdRole() == 3) {
    $tuteur = TuteursManager::getByEmail($_SESSION['utilisateur']->getEmailUtilisateur());
    $stages = StagesManager::getByTuteur($tuteur->getIdTuteur());
    // var_dump($stages);
    if (count($stages) > 1) {
        $_SESSION["plusieursStagiaires"]="oui";
        for ($i = 0; $i < count($stages); $i++) {
            $idStagiaire = $stages[$i]->getIdStagiaire();
            $stagiaires = StagiairesManager::findById($idStagiaire);
            echo '
            <section>
            <div class="colonne centre titreColonne blocBouton">
                <h1 class="centerItem ">' . $stagiaires->getNomStagiaire()." ". $stagiaires->getPrenomStagiaire() . '</h1>
                <a href="index.php?page=FormFRInfosStagiaire&idStagiaire='.$stages[$i]->getIdStagiaire().'&idStage='.$stages[$i]->getIdStage().'">
                    <button type="submit" class="centerItem bouton">Completer la fiche info  </button>
                </a>
                <div class="espaceHor"></div>
            </div>
            </section>';
        }
    } else {
        header('location: index.php?page=FormFRInfosStagiaire&idStagiaire='.$stages[0]->getIdStagiaire().'&idStage='.$stages[0]->getIdStage());
    }

} else {
    $_SESSION["plusieursStagiaires"]="non";
    header('location: index.php?page=FormFRConnection');
}
?>
