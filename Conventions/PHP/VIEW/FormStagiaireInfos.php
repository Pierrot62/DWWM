<?php

if ($_SESSION['utilisateur']->getIdRole() == 4) {
    $stagiaire = StagiairesManager::findById();
}
//?????

$stagiaire = NEW Stagiaire([])
$a1 = new agence(["genreStagiaire" => "H", "nomStagiaire" => "COURQUIN","prenomStagiaire" => "Pierre" ,"numSecuStagiaire" => "2447586145789" , "numBenefStagiaire" => "48745485"]);

?>

<section>

    <!-- <input type="text" value="$_SESSION['utilisateur']->getPrenomStagiaire()"> -->
    <form action="" method="POST">

        <div class=" ">
            <div class="info colonne ">
                <label for="prenom">Prenom :</label>
                <input type="text" id="prenom" name="prenom" value="<?php $stagiaire->getPrenomStagiaire() ?>" required pattern="[a-zA-Z- ]{3,}">
            </div>
            <div class="info colonne ">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" value="<?php $stagiaire->getNomStagiaire() ?>" required pattern="[a-zA-Z- ]{3,}">
            </div>
        </div>
        <div>
            <div class="info  centerItem colonne">
                <label for="homme">Homme</label>
                <input type="radio" required id="genre" name="genre" value="H">
            </div>
            <div class="info  centerItem colonne">
                <label for="femme">Femme</label>
                <input type="radio" required id="genre" name="genre" value="F">
            </div>
            <div class="info colonne  grande">
                <label for="numSecu">Votre Numero de securite social :</label>
                <input type="text" id="numSecu" name="numSecu" required pattern="\d{13}" value="<?php $stagiaire->getNumSecuStagiaire() ?>">
            </div>
        </div>

        <div >
            <div class="info colonne center">
                <label for="numbenef">Votre numero de beneficiaire :</label>
                <input type="text" id="numBenef" name="numbenef" value="<?php $stagiaire->getNumBenefStagiaire() ?>" required pattern="\d{8}">
            </div>
            <div class="info colonne center">
                <label for="ddn">Votre date de naissance :</label>
                <input type="date" id="ddn" name="ddn" value="<?php $stagiaire->getDateDeNaissanceStagiaire() ?>" required>
            </div>
        </div>

        <div >
            <div class="info colonne center">
                <label for="emailTuteur">Email de votre tuteur :</label>
                <input type="text" id="emailTuteur" name="emailTuteur" value="" required pattern="^[a-z]+[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$" >                
            </div>
        </div>
        <div >
            <div class="info colonne center">
                <button class="bouton" type="submit"><i class="fas fa-paper-plane"></i> Envoyer</button>
            </div>
        </div>
        <div >
            <div class="info center">
                <span class="erreur"></span>
            </div>
        </div>

    </form>

</section>

