<?php

if (isset($_SESSION["utilisateur"]) == true) {

    $representant = RepresentantsManager::getList();

    echo '<div class="ajouter"><a href="index.php?page=FormRepresentant&mode=add">Ajouter un representant </a></div>';

    foreach ($representant as $unrepresentant) {

        echo '
            <div class="listeRepresentants flex">
                <div class="representant">' . $unrepresentant->getNomRepres() . '</div>
                <div class="representant">' . $unrepresentant->getVilleRepres() . '</div>';

        if ($_SESSION['utilisateur']->getRoleUser() == 2) {
            echo '<div><a href="index.php?page=actionrepresentants&mode=delete&id=' . $unrepresentant->getIdrepres() . '">Supprimer</a></div>
                    <div><a href="index.php?page=formInscript&mode=update&id=' . $unrepresentant->getIdrepres() . '">Modifier</a></div>';
        }

        echo '</div>';
    }

    ?>
        </div>
    </article>
<?php

} else {
    header("location: index.php?page=FormConnect");
}
