<?php

if (isset($_SESSION['utilisateur']) == true) {

    $client = clientsManager::getList();
  
    echo '<div class="ajouter"><a href="index.php?page=FormClient&mode=add">Ajouter un Client </a></div>';

    foreach ($client as $unclient) {

        echo '
            <div class="listeclients flex">
                <div class="client">' . $unclient->getNomClient() . '</div>
                <div class="client">' . $unclient->getVilleClient() . '</div>
                <div><a href="index.php?page=FormClient&mode=update&id=' . $unclient->getIdClient() . '">Modifier</a></div>';
                if ($_SESSION['utilisateur']->getRoleUser() == 2) {
                    echo '<div><a href="index.php?page=ActionClient&mode=delete&id=' . $unclient->getIdClient() . '">Supprimer</a></div>';
                }
            echo '</div>';
    }

} else {
    header("location: index.php?page=FormConnect");
}
