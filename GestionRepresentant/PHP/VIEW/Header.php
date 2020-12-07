<header>

<div class="elmHeader colonne ">
    <?php
if (isset($_SESSION['utilisateur'])) {
    echo '<div>' . $_SESSION['utilisateur']->getNomUser() . ' ' . $_SESSION['utilisateur']->getPrenomUser() . '</div>
        <div>
            <button><a href="index.php?page=ActionConnect&mode=disconnect">Deconnection</a></button>
        </div>';
} else {
    echo '<div class="elmHeader">
        <button><a href="index.php?page=FormConnect">Connection</a></button>
        </div>';
}

?>

    <div class="elmHeader">
        <button><a href="index.php?page=Accueil">Retour a l'accueil</a></button>
    </div>

</header>