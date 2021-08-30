<?php
$mode = $_GET['mode'];
if (isset($_GET['id']))  // si l'id est renseigné
{
    $idRecu = $_GET['id'];
    if ($idRecu != false)
    {
        $ville = VilleManager::findById($idRecu);
    }
}
// $date = date('d-m-y h:i:s');
// var_dump($date);

   
echo '<form action="index.php?codePage=actionVille&mode=edit" method="POST">
<input name="idVille"  value="' . $ville->getIdVille() . '" type="hidden" />';
           
        
  



?>
    <div class="espace"></div>
    <div class="colonne center">
            <label for="nomVille">Nom</label>
            <input name="nomVille" <?php echo 'value="'.$ville->getNomVille().'"'?>/>
        <div class="espace"></div>
            <label for="numDepVille">numDep</label>
            <input name="numDepVille"  <?php echo 'value="'.$ville->getNumDepVille().'"'?> />
        <div class="espace"></div>
            <label for="cpVille">cpVille</label>
            <input name="cpVille" <?php echo 'value="'.$ville->getCpVille().'"'?> />
    </div>
    
     
<?php



        echo '<button class="btnVille" type="submit">Modifier la Ville</button>';

   echo '<button class="btnVille"><a href="index.php?codePage=listeVille">Retour</a></button>
</form>';

