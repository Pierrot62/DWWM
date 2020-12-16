

<!-- Ajout de note -->

<section class="degrader formulaire colonne">

<form class="colonne" action="ActionNote.php" method="POST">
  <div class="globalForm colonne">
    <div class="blocInput">
      <label for="eleve">Eleve : </label>
      <select name="eleve" id="eleve">
          <option value="">Pierre Courquin</option>
          <option value="">Courquin Pierre</option>
      </select>
    </div>
    <div class="blocInput">
      <label for="note">Note : </label>
      <input type="password" id="note" />
    </div>
    <div>
        <button type="submit" class="button">Ajouter</button>
        <button class="button"><a href="index.php?page=ListEnseignant">Annuler</a></button>
    </div>
  </div>
</form>

</section>


<!-- modification de note -->
<section class="degrader formulaire colonne">

<form class="colonne" action="ActionNote.php" method="POST">
  <div class="globalForm colonne">
    <div class="blocInput">
      <label for="eleve">Eleve : </label>
      <input type="note" disabled id="eleve"/>
    </div>
    <div class="blocInput">
      <label for="note">Note : </label>
      <input type="password" id="note" />
    </div> <div>
        <button type="submit" class="button">Ajouter</button>
        <button class="button"><a href="index.php?page=ListEnseignant">Annuler</a></button>
    </div><button type="submit" class="button">Connection</button>
  </div>
</form>

</section>
