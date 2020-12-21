<?php
$mode = $_GET["mode"];
if ($mode == "new") {

echo'<section class="degrader formulaire colonne">

<form class="colonne" action="index.php?page=ActionNote&mode=new" method="POST">
  <div class="globalForm colonne">
    <div class="blocInput">
      <label for="eleve">Eleve : </label>
      <select name="idEleve" id="idEleve">';
      $eleves = ElevesManager::getList();

      foreach ($eleves as $unEleve) {
  
          echo '<option name="idEleve" value="' . $unEleve->getIdEleve() . '">' . $unEleve->getNomEleve().' '. $unEleve->getPrenomEleve().'</option>';
      }
    echo'</select>
    </div>
    <div class="blocInput">
      <label for="note">Note : </label>
      <input type="text" name="Note" id="note" />
    </div>
    <div class="blocInput">
      <input type="hidden" name="IdMatiere" value="'.$_SESSION["utilisateur"]->getIdMatieres().'" id="note" />
      <input type="hidden" name="Coefficient" value="2" id="note" />
    </div>
    <div>
        <button type="submit" class="button">Ajouter</button>
        <button class="button"><a href="index.php?page=ListNote">Annuler</a></button>
    </div>
  </div>
</form>

</section>';

}elseif ($mode == "update") {

  $id = $_GET["id"];
  $note = SuivisManager::findById($id);
  $eleve = ElevesManager::findById($note->getIdEleve());
  $infoEleve = $eleve->getPrenomEleve()." ".$eleve->getPrenomEleve();

 echo'<section class="degrader formulaire colonne">

<form class="colonne" action="index.php?page=ActionNote&mode=update" method="POST">
  <div class="globalForm colonne">
    <div class="blocInput">
      <label for="eleve">Eleve : </label>
      <input type="note" disabled value="'.$infoEleve.' " id="eleve"/>
    </div>
    <div class="blocInput">
      <label for="note">Note : </label>
      <input type="text" name="Note" value="'.$note->getNote().'" id="note" />
    </div> 
    <div class="blocInput">
      <input type="hidden" name="IdMatiere" value="'.$_SESSION["utilisateur"]->getIdMatieres().'" id="note" />
      <input type="hidden" name="Coefficient" value="2" id="note" />
      <input type="hidden" name="IdSuivi" value="'.$note->getIdSuivi().'" id="note" />
      <input type="hidden" name="IdEleve" value="'.intval($note->getIdEleve()).'" id="note" />
    </div>
    <div>
        <button type="submit" class="button">Confirmer</button>
        <button class="button"><a href="index.php?page=ListEnseignant">Annuler</a></button>

        </div>
</form>

</section>';

}


