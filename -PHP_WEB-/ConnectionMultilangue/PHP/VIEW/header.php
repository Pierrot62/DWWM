<?php

/* construction de l'url en fonction de l'uri existante  */
// var_dump($_SERVER);
$uri = $_SERVER['REQUEST_URI'];
if (substr($uri, strlen($uri) - 1) == "/") // se termine par /
{
    $uri .= "index.php?";
} else if (in_array("?", str_split($uri))) // si l'uri contient deja un ?
{
    $uri .= "&";
} else {
    $uri .= "?";
}

?>

<header>

    <div class="elmHeader"><a href="index.php?codePage=accueil"><img src="./IMG/logo.png" alt="Logo BWM"></a></div>

    <div class="elmHeader titleSite">

       - BMW Boulogne Sur Mer -

    </div>


    <div class="elmHeader">
        <div> <?php
                if (!empty($_SESSION['utilisateur'])) {
                    echo 'Bonjour ' . $_SESSION['utilisateur']->getNom() . ' ! ';
                }
                ?></div>

        <div>
            <?php
            if (!empty($_SESSION['utilisateur'])) {
                echo '<a href="index.php?codePage=actionSession&mode=deconnection">'.texte("deconnection").'</a>';
            }
            ?>
        </div>
    </div>

</header>