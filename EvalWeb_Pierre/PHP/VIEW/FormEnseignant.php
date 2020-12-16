<?php
$mode= $_GET["mode"];


if ($mode == "add") {
 echo' 
<section class="degrader formulaire colonne">

<form class="colonne" action="index.php?page=ActionConnect&mode=new" method="POST">
  <div class="globalForm colonne">
    <div class="blocInput">
      <label for="login">pseudo : </label>
      <input type="text" name="login" id="login" />
    </div>
    <div class="blocInput">
      <label for="PrenomUtilisateur">Prenom : </label>
      <input type="text" name="PrenomUtilisateur" id="PrenomUtilisateur" />
    </div>
    <div class="blocInput">
      <label for="NomUtilisateur">nom : </label>
      <input type="text" name="NomUtilisateur" id="NomUtilisateur" />
    </div>
    <div class="blocInput">
      <label for="motDePasse">motDePasse : </label>
      <input type="password"  name="motDePasse" id="motDePasse" />
    </div>
    <div class="blocInput">
      <label for="idMatieres">id matiere : </label>
      <input type="text"  name="idMatieres" id="idMatieres" />
    </div>
    <input type="hidden" name="Role" value="1">
    <div>
        <button type="submit" class="button">Ajouter</button>
        <button class="button"><a href="index.php?page=ListEnseignant">Annuler</a></button>
    </div>

  </div>
</form>

</section>';

}elseif ($mode == "update") {
  $id= $_GET["id"];
  $enseignant = UtilisateurManager::findById($id);

  echo'
<section class="degrader formulaire colonne">

<form class="colonne" action="index.php?page=ActionConnect&mode=update" method="POST">
  <div class="globalForm colonne">
    <div class="blocInput">
      <label for="login">pseudo : </label>
      <input type="text" name="login" value="'.$enseignant->getLogin().'" id="login" />
    </div>
    <div class="blocInput">
      <label for="PrenomUtilisateur">Prenom : </label>
      <input type="text" name="PrenomUtilisateur" value="'.$enseignant->getPrenomUtilisateur().'"  id="PrenomUtilisateur" />
    </div>
    <div class="blocInput">
      <label for="NomUtilisateur">nom : </label>
      <input type="text" name="NomUtilisateur" value="'.$enseignant->getNomUtilisateur().'"  id="NomUtilisateur" />
    </div>
    <div class="blocInput">
      <label for="motDePasse">motDePasse : </label>
      <input type="password"  name="motDePasse" value="'.$enseignant->getMotDePasse().'"  id="motDePasse" />
    </div>
    <div class="blocInput">
      <label for="idMatieres">id matiere : </label>
      <input type="text"  name="idMatieres" value="'.$enseignant->getIdMatieres().'"  id="idMatieres" />
    </div>
    <input type="hidden" name="Role"  value="'.$enseignant->getRole().'" >
    <input type="hidden" name="idUtilisateur"  value="'.$enseignant->getIdUtilisateur().'" >

    <div>
        <button type="submit" class="button">Ajouter</button>
        <button class="button"><a href="index.php?page=ListEnseignant">Annuler</a></button>
    </div>

  </div>
</form>

</section> ';

}
