

<?php

// if (isset($_SESSION("utilisateur")) && $_SESSION("utlisateur")->getRole() == 2 ){


echo '
<section class="degrader colonne">
<div class="globalAccueil colonne">
<div class="divCatergorie"><a href="index.php?page=ListEleves">Gerer les eleves</a></div>
<div class="divCatergorie">Gerer les enseignants</div>
<div class="divCatergorie">Gerer les notes</div>
<div class="divCatergorie">Gerer les matieres</div>
</div>';

// }else if (isset($_SESSION("utilisateur")) && $_SESSION("utlisateur")->getRole() == 1 ) {
  
  echo'
  <session class="degrader">
  <class="degrader">
        <div class="globalList colonne">
        <div class="colonne">
        
            <div class="button"><a href="index.php?page=FormEleve">Ajouter une note</a></div>
          
        </div>
        <div class="center">
            <div></div>
            <div class="elmList">
                <div>nom</div>
                <div>prenom</div>
                <div>note</div>
                 <div><a href="">Modifier</a></div>
            </div>

            </div>
          <div></div>
        </div>
        
        </div>

  ';


// }else{

  // header("location: index.php?page=FormeConnect");
// }
?>
</section>