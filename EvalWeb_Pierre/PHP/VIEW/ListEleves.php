<?php
$eleve = ElevesManager::getList();

echo '
<section class="degrader">
<div class="globalList colonne">
<div class="listNav">
    <ul>
        <li><a href="index.php?page=ListEleves">Eleves</a></li>
        <li><a href="index.php?page=ListEnseignant">Enseignant</a></li>
        <li><a href="index.php?page=ListNote">Notes</a></li>
        <li><a href="index.php?page=ListMatiere">Matieres</a></li>
    </ul>
</div>
<div class="colonne">

    <div class="button"><a href="index.php?page=FormEleve">Ajouter des eleves</a></div>

</div>';

foreach ($eleve as $uneleve) {
    echo '
<div class="center">
    <div></div>
    <div class="elmList">
        <div>' . $uneleve->getNomEleve() . '</div>
        <div>' . $uneleve->getPrenomEleve() . '</div>
        <div>' . $uneleve->getClasse() . '</div>
    </div>
    <div class="elmList">
       <!-- <img src="./IMG/modifier.png" alt="">
       <img src="./IMG/supprimer.png" alt=""> -->
       <div><a href="">Modifier</a></div>
       <div><a href="">Supprimer</a></div>
    </div>
    <div></div>
</div>

</div>
</section>';

}
