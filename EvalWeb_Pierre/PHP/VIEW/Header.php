<body>
    <header>
      <div class="globalHeader">
        <div class="elmHeader"><img src="./IMG/icone.jpg" alt="" /></div>
        <div class="elmHeader"></div>
        <div class="elmHeader colonne">
          <h1>GESTION DES NOTES</h1>
          <h2><?php echo $titre ?></h2>
        </div>
        <div class="elmHeader" ></div>
      <?php
      if (isset($_SESSION['utilisateur'])) {
        $Idmatiere = $_SESSION['utilisateur']->getIdMatieres();
        $matieres = MatieresManager::findById($Idmatiere);
        echo'<div class="elmHeader colonne">        
        <div>'.$_SESSION['utilisateur']->getNomUtilisateur().' '.$_SESSION['utilisateur']->getPrenomUtilisateur().'</div>
        <div>'.$matieres->getLibelleMatiere().'</div>
        <div class="button"><a href="index.php?page=ActionConnect&mode=disconnect">deconnexion</a></div>
        </div>';
      }else
      {
        echo'<div class="elmHeader colonne">
        <div class="button"><a href="index.php?page=FormConnect">Connectez-vous</a></div>
        </div>';
      }
      ?>
    </div>
    </header>
    <div class="espaceHeader"></div>