<header>
    <div class="titre"><?php echo $titre; ?></div>
    <div class="colonne">
        <?php

    
        if (!empty($_SESSION['utilisateur']))
        {
            echo 'Bonjour '.$_SESSION['utilisateur']->getNom().' ! ';

        }
       
        ?>

    </div>
</header>