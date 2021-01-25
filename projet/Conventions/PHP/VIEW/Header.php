<header>
    <div class="logo">
        <div class="logo"></div>
        <div><a href="index.php"><img src="./IMG/afpa.png" alt="logo Afpa"></div></a>
        <div class="logo"></div>
    </div>
    <div class="titre centre colonne">
        <h1>Gestion des Conventions de Stage</h1>
        <h2><?php echo $titre ?></h2>
    </div>

    <div class="connection colonne centre">
        <div></div>
        <?php
            if (isset($_SESSION['utilisateur'])) {
                echo '<a href="index.php?page=ActionConnexion&mode=logout">

                    <button class="bouton centre">Deconnection</button>

                    </a>';
            }
        ?>

        <div></div>
    </div>
</header>
<div class="container">
<div></div>