<?php
$enseignant = UtilisateurManager::getList();
echo'
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

    <div class="button"><a href="index.php?page=FormEnseignant&mode=add">Ajouter un Enseignant</a></div>
  
</div>';

foreach ($enseignant as $unenseignant) {
    $matiere = MatieresManager::findById($unenseignant->getIdMatieres());
    echo'
    <div class="center">
    <div></div>
    <div class="elmList">
        <div>'. $matiere->getLibelleMatiere().'</div>
        <div>'. $unenseignant->getLogin().'</div>
        <div>'. $unenseignant->getPrenomUtilisateur().'</div>
        <div>'. $unenseignant->getNomUtilisateur().'</div>
        <div class="hidden">'. $unenseignant->getLogin().'</div>
        <div class="hidden">'. $unenseignant->getIdUtilisateur().'</div>

    </div>
    <div class="elmList">
       <!-- <img src="./IMG/modifier.png" alt="">
       <img src="./IMG/supprimer.png" alt=""> -->
       <div><a href="index.php?page=FormEnseignant&mode=update&id='.$unenseignant->getIdUtilisateur().'">Modifier</a></div>
       <div><a href="index.php?page=ActionConnect&mode=delete&id='.$unenseignant->getIdUtilisateur().'">Supprimer</a></div>
    </div>
    <div></div>
</div>';

}


echo'
</div>
</section>';