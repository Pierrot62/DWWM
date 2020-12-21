<!-- <section class="degrader formulaire colonne">

<form class="colonne" action="index.php?page=ActionMatiere&mode=new" method="POST">
  <div class="globalForm colonne">
    <div class="blocInput">
      <label for="libelle">libelle : </label>
      <input type="text" name="LibelleMatiere" id="libelle"/>
    </div>
    <div>
        <button type="submit" class="button">Ajouter</button>
        <button class="button"><a href="index.php?page=ListeMatiere">Annuler</a></button>
    </div>
  </div>
</form>

</section> -->


<?php
$mode= $_GET["mode"];


if ($mode == "add") {
 echo' 
<section class="degrader formulaire colonne">

<form class="colonne" action="index.php?page=ActionConnect&mode=new" method="POST">
  <div class="globalForm colonne">
    <div class="blocInput">
      <label for="libelle">Libelle : </label>
      <input type="text" name="LibelleMatiere" id="libelle" />
    </div>
    <input type="hidden" name="Role" value="1">
    <div>
        <button type="submit" class="button">Ajouter</button>
        <button class="button"><a href="index.php?page=ListMatiere">Annuler</a></button>
    </div>

  </div>
</form>

</section>';

}elseif ($mode == "update") {
  $id= $_GET["id"];
  $matiere = MatieresManager::findById($id);
  echo'
<section class="degrader formulaire colonne">

<form class="colonne" action="index.php?page=ActionMatiere&mode=new" method="POST">
  <div class="globalForm colonne">
    <div class="blocInput">
      <label for="libelle">libelle : </label>
      <input type="text" value="'.$matiere->getLibelleMatiere().'" name="LibelleMatiere" id="libelle"/>
    </div>
    <div>
        <button type="submit" class="button">Ajouter</button>
        <button class="button"><a href="index.php?page=ListeMatiere">Annuler</a></button>
    </div>
  </div>
</form>

</section>

</section> ';

}
