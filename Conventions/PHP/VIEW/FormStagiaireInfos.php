<?php
// OBJET DE TEST
$utilisateur = new Utilisateurs(["nomUtilisateur" => "RJEB", "prenomUtilisateur" => "Zied", "emailUtilisateur" => "zied@gmail.com", "mdpUtilisateur" => "user", "datePeremption" => "", "idRole" => 4]);

// var_dump($utilisateur);

$_SESSION['utilisateur'] = $utilisateur;

// var_dump($_SESSION["utilisateur"]);

if ($_SESSION['utilisateur']->getIdRole() == 4) {
    $stagiaire = StagiairesManager::getByEmailStagiaire($_SESSION['utilisateur']->getEmailUtilisateur());
    // var_dump($stagiaire);
}

$stage = StagesManager::getByIdStagiaire($stagiaire->getIdStagiaire());
// var_dump($stage);

if (count($stage)>1) {
    // echo("deux stages");
}

?>

<section>

   <div>

    <?php
    for ($i=0; $i < count($stage) ; $i++) { 
        $tuteur = TuteursManager::findById($stage[$i]->getIdTuteur());
        $entreprise = EntreprisesManager::findById($tuteur->getIdEntreprise());
        echo'<div class="colonne">
            <div>'. $entreprise->getRaisonSociale().'</div>
            <div>
                <button class="bouton">Completer les infos</button>
            </div>
        </div>';
    }
   ?>
   
        
    </div>
</section>

