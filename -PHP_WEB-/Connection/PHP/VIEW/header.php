<header>
    <div class="titre"><?php echo $titre; ?></div>
    <div class="colonne">
        <?php

        echo'toto';

        if (!empty($_SESSION['utilisateur']))
        {
            echo $_SESSION['utilisateur']->getNom();

        }
        var_dump($_SESSION);
       
        ?>

    </div>
</header>