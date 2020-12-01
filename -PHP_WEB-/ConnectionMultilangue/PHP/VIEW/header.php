<?php

/* construction de l'url en fonction de l'uri existante  */
// var_dump($_SERVER);
$uri = $_SERVER['REQUEST_URI'];
if (substr($uri, strlen($uri) - 1) == "/") // se termine par /
{
    $uri .= "index.php?";
}
else if (in_array("?", str_split($uri))) // si l'uri contient deja un ?
{
    $uri .= "&";
}
else
{
    $uri .= "?";
}

?>

<header>
    <div class="titre"><?php echo texte('connexion'); ?></div>
    <div class="colonne">
        <?php

    
        if (!empty($_SESSION['utilisateur']))
        {
            echo 'Bonjour '.$_SESSION['utilisateur']->getNom().' ! ';

        }
       
        ?>
<?php echo texte('langue disponible'); ?>
<div class="lang">
        <div>
            <a href="<?php echo $uri; ?>lang=EN">
                <img src="./IMG/flagEn.png" alt="drapeaux anglais">
            </a>
        </div>
        <div></div>
        <div>
            <a href="<?php echo $uri; ?>lang=FR">
                <img src="./IMG/flagFr.png" alt="drapeaux francais">
            </a>
        </div>
        <div></div>
    </div>

    </div>
</header>