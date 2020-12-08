<?php

$mode = $_GET['mode'];

if(isset($_GET["id"])){

    $id = $_GET["id"];
    $representant = RepresentantsManager::findById($id);

}

?>

    <?php if($mode == "add"){
         echo '
         <form action="index.php?p=ActionRepresentant&mode=add" method="POST">

         <div><label for="NomRepres">Nom du Representant</label></div>
         <div>
           <input
             type="text"
             name="nomRepres"
             placeholder="Nom du Representant"
             required
           />
         </div>';
         echo '<div><label for="VilleRepres">Ville du Representant</label></div>
        <div>
          <input
            type="text"
            name="VilleRepres"
            placeholder="Nom du Representant"
            required
          />
        </div>
        <input type="submit"> 
        ';
    }else if($mode == "update"){
        echo '
        <form action="index.php?p=ActionRepresentant&mode=update" method="POST">

        <div><label for="NomRepres">Nom du Representant</label></div>
        <div>
          <input
            type="text"
            name="NomRepres"
            value="'.$representant->getNomRepres().'"
            placeholder="Nom du Representant"
            required
          />
        </div>';
        echo '<div><label for="VilleRepres">Ville du Representant</label></div>
        <div>
          <input
            type="text"
            name="VilleRepres"
            value="'.$representant->getVilleRepres().'"
            placeholder="Nom du Representant"
            required
          />
        </div>
        <input type="hidden" name="IdRepres" value="'.$id.'">
        <input type="submit"> 

        ';
    }else{
        echo '
        <form action="index.php?p=ActionRepresentant&mode=delete" method="POST">

        <div><label for="NomRepres">Nom du Representant</label></div>
        <div>
          <input
            type="text"
            disabled
            name="NomRepres"
            value="'.$representant->getNomRepres().'"
            placeholder="Nom du Representant"
            required
          />
        </div>';
        echo '<div><label for="VilleRepres">Ville du Representant</label></div>
        <div>
          <input
            type="text"
            disabled
            name="VilleRepres"
            value="'.$representant->getVilleRepres().'"
            placeholder="Nom du Representant"
            required
          />
        </div>
        <input type="hidden" name="IdRepres" value="'.$id.'"></input>
        <input type="submit"> 

        ';
    }
        ?>


    </form>