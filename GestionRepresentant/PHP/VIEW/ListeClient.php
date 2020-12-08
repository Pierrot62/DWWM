<section>
<?php

if (isset($_SESSION['utilisateur']) == true) {

    $client = clientsManager::getList();
  
    echo '<div class="ajouter"><a href="index.php?p=FormClient&mode=add">Ajouter un Client </a></div>';

    foreach ($client as $unclient) {

        echo '
            <div class="liste flex">
                <div class="info">
                <div class="elmListe">' . $unclient->getNomClient() . '</div>
                <div class="elmListe">' . $unclient->getVilleClient() . '</div>
                <div class="elmListe"><a href="index.php?p=FormClient&mode=update&id=' . $unclient->getIdClient() . '">Modifier</a></div>
                </div>';
                if ($_SESSION['utilisateur']->getRoleUser() == 2) {
                    echo '<div class="elmListe supprimer"><a href="index.php?p=FormClient&mode=delete&id=' . $unclient->getIdClient() . '">Supprimer</a></div>
                    <div class="elmListe modifier"><a href="index.php?p=FormClient&mode=update&id=' . $unclient->getIdClient() . '">modifier</a></div>';
                }
            echo '</div>';
    }

} else {
    header("location: index.php?p=FormConnect");
}
?>
</section>