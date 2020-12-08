<section>
<?php

if (isset($_SESSION["utilisateur"]) == true) {

    $representant = RepresentantsManager::getList();
    if ($_SESSION["utilisateur"]->getRoleUser() ==2){
    echo '<div class="ajouter"><a href="index.php?p=FormRepresentant&mode=add">Ajouter un representant </a></div>';
    }
    foreach ($representant as $unrepresentant) {

        echo '
            <div class="liste flex">
            <div class="info">
                <div class="elmListe">' . $unrepresentant->getNomRepres() . '</div>
                <div class="elmListe">' . $unrepresentant->getVilleRepres() . '</div>
            </div>';
        if ($_SESSION['utilisateur']->getRoleUser() == 2) {
            echo '<div class="elmListe supprimer"><a href="index.php?p=FormRepresentant&mode=delete&id=' . $unrepresentant->getIdrepres() . '">Supprimer</a></div>
                    <div class="elmListe modifier"><a href="index.php?p=formInscript&mode=update&id=' . $unrepresentant->getIdrepres() . '">Modifier</a></div>';
        }

        echo '</div>';
    }

    ?>
        </div>
    </article>
<?php

} else {
    header("location: index.php?p=FormConnect");
}
?>
</section>