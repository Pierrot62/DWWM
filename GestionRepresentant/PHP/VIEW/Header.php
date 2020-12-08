<header>
<div class="elmHeader">
        <button><a href="index.php?p=Accueil">Retour a l'accueil</a></button>
    </div>
<div class="elmHeader">Journal des ventes</div>

<div class="elmHeader colonne ">
    <?php
if (isset($_SESSION['utilisateur'])) {
    echo '<div>' . $_SESSION['utilisateur']->getNomUser() . ' ' . $_SESSION['utilisateur']->getPrenomUser() . '</div>
        <div class="elmHeader">
            <button><a href="index.php?p=ActionConnect&mode=disconnect">Deconnection</a></button>
        </div>';
} else {
    echo '<div class="elmHeader">
        <button><a href="index.php?p=FormConnect">Connection</a></button>
        </div>';
}

?>
</div>
   

</header>