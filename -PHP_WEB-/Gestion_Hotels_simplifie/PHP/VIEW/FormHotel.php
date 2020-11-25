<?php
$mode = $_GET['mode'];
if (isset($_GET['id']))  // si l'id est renseigné
{
    $idRecu = $_GET['id'];
    if ($idRecu != false)
    {
        $hotelChoisi = HotelsManager::findById($idRecu);
    }
}
switch ($mode)
{
    case "ajout":    {
            echo '<form action="index.php?codePage=actionHotel&mode=ajout" method="POST">';
            break;
        }
    case "modif":    {
            echo '<form action="index.php?codePage=actionHotel&mode=modif" method="POST">
        <input name="idHotel"  value="' . $hotelChoisi->getIdHotel() . '" type="hidden" />';
            break;
        }
    case "delete":    {
            echo '<form action="index.php?codePage=actionHotel&mode=delete" method="POST">
        <input name="idHotel"  value="' . $hotelChoisi->getIdHotel() . '" type="hidden" />';
            break;
        }
    case "edit":    { //il n'y a pas d'action sur le formulaire, juste le bouton retour
        echo '<form >  
    <input name="idHotel"  value="' . $hotelChoisi->getIdHotel() . '" type="hidden" />';
        break;
    }
}


?>

    <div>
        <label for="nomHotel">Nom</label>
        <input name="nomHotel" <?php if ($mode !="ajout") { echo 'value="'.$hotelChoisi->getNomHotel().'"';} if ($mode=="delete" || $mode=="edit") echo 'disabled'; ?>/>
    </div>
    <div class="espace"></div>
     <div>
     <label for="AdresseHotel">Adresse</label>
     <input name="AdresseHotel"  <?php if ($mode !="ajout") { echo 'value="'.$hotelChoisi->getAdresseHotel().'"';} if ($mode=="delete" || $mode=="edit") echo 'disabled'; ?> />
     </div>
     <div class="espace"></div>
     <div>
         <label for="VilleHotel">Ville</label>
         <input name="VilleHotel" <?php if ($mode !="ajout") { echo 'value="'.$hotelChoisi->getVilleHotel().'"';} if ($mode=="delete" || $mode=="edit") echo 'disabled'; ?> />
     </div>
     <div class="espace"></div>
     <div>
         <label for="CategorieHotel">Catégorie</label>
         <input name="CategorieHotel" <?php if ($mode !="ajout") { echo 'value="'.$hotelChoisi->getCategorieHotel().'"'; } else{echo 'value="1"';} if ($mode=="delete" || $mode=="edit") echo 'disabled'; ?>  />
     </div>
     <div class="espace"></div>
     <div>
        <select id="CategorieHotel">
        <option value="valeur1"><?php $hotelChoisi->getCategorieHotel() ?></option>    
     </div>
</select>
         <input name="idStation" <?php if ($mode !="ajout") { echo 'value="'.$hotelChoisi->getIdStation().'"';} else{echo 'value="1"';}  ?>   type="hidden" />
     <div></div>
     
<?php

var_dump(HotelsManager::getListCat());
 switch ($mode)
{
    case "ajout":    
    {
        echo '    <button type="submit">Ajouter un hotel</button>';
        break;
    }
    case "modif":   
    {
        echo '    <button type="submit">Modifier l\'hotel</button>';
        break;
    }
    case "delete":    
    {
        echo '    <button type="submit">Supprimer l\'hotel</button>';
        break;
    }
}
   echo '<button><a href="index.php?codePage=listeHotel">Retour</a></button>
</form>';

