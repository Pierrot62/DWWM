<?php

$note =SuivisManager::getList();
$role = $_SESSION["utilisateur"]->getRole();

echo'
<section class="degrader">';
if ($role == 2) {
    echo'
    <div class="globalList colonne">
    <div class="listNav">
        <ul>
            <li><a href="index.php?page=ListEleves">Eleves</a></li>
            <li><a href="index.php?page=ListEnseignant">Enseignant</a></li>
            <li><a href="index.php?page=ListNote">Notes</a></li>
            <li><a href="index.php?page=ListMatiere">Matieres</a></li>
        </ul>
    </div>
    ';
}else{

}
echo'
<div class="colonne">

    <div class="button"><a href="index.php?page=FormNote&mode=new">Ajouter une note</a></div>

</div>';
foreach ($note as $unenote) {
    $eleve = ElevesManager::findById($unenote->getIdEleve());
    $matiere = MatieresManager::findById($unenote->getIdMatiere());
    echo'<div class="center">
    <div></div>
    <div class="elmList">
        <div>'.$eleve->getPrenomEleve().'</div>
        <div>'.$matiere->getLibelleMatiere().'</div>
        <div>'.$unenote->getNote().'</div>
       
        <input type="hidden" name="IdSuivi" value="'.$unenote->getIdSuivi().'">
        <input type="hidden" name="IdMatiere" value="'.$unenote->getIdMatiere().'">
        <input type="hidden" name="IdEleve" value="'.$unenote->getIdEleve().'">
        <input type="hidden" name="Note" value="'.$unenote->getNote().'">
        <input type="hidden" name="Coefficient" value="'.$unenote->getCoefficient().'">




    </div>
    <div class="elmList">
       <!-- <img src="./IMG/modifier.png" alt="">
       <img src="./IMG/supprimer.png" alt=""> -->
       <div><a href="index.php?page=FormNote&mode=update&id='.$unenote->getIdSuivi().'">Modifier</a></div>';
       if ($role == 2) {
        echo'<div><a href="index.php?page=ActionNote&mode=delete">Supprimer</a></div>';
    }else{

    }
    echo'</div>
    <div></div>
</div>

</div>
</section>';

}
