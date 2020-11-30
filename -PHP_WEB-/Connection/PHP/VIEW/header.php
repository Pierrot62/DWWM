<header>
    <div class="titre"><?php echo $titre; ?></div>
    <div class="colonne">
        <?php

      

        if (!empty($_SESSION['utilisateur']))
        {
            echo $_SESSION['utilisateur']->getNom();

        }
       
        ?>

    </div>
</header>