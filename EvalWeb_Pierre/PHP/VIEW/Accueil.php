

<?php

if (isset($_SESSION["utilisateur"])) {

    $role = $_SESSION["utilisateur"]->getRole();
    if ($role == 2) {

        echo '
    <section class="degrader colonne">
    <div class="globalAccueil colonne">
    <div class="divCatergorie"><a href="index.php?page=ListEleves">Gerer les eleves</a></div>
    <div class="divCatergorie"><a href="index.php?page=ListEnseignant">Gerer les enseignants</a></div>
    <div class="divCatergorie"><a href="index.php?page=ListNote">Gerer les notes</a></div>
    <div class="divCatergorie"><a href="index.php?page=ListMatiere">Gerer les matieres</a></div>
    </div>';

    } else if ($role == 1) {

      header("location: index.php?page=ListNote");

    }
} else {

    header("location: index.php?page=FormConnect");
}
?>
</section>