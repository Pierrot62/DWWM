<?php

$mode = $_GET['mode'];

if(isset($_GET["id"])){

    $id = $_GET["id"];
    $client = ClientsManager::findById($id);

}

?>
  <section>
    <?php if($mode == "add"){
         echo '
         <form action="index.php?p=ActionClient&mode=add" method="POST">

         <div><label for="NomClient">Nom du client</label></div>
         <div>
           <input
             type="text"
             name="NomClient"
             placeholder="Nom du client"
             required
           />
         </div>';
         echo '<div><label for="VilleClient">Ville du client</label></div>
        <div>
          <input
            type="text"
            name="VilleClient"
            placeholder="Nom du client"
            required
          />
        </div>
        <div><input type="submit"></div>
        ';
    }else if($mode == "update"){
        echo '
        <form action="index.php?p=ActionClient&mode=update" method="POST">

        <div><label for="NomClient">Nom du client</label></div>
        <div>
          <input
            type="text"
            name="NomClient"
            value="'.$client->getNomClient().'"
            placeholder="Nom du client"
            required
          />
        </div>';
        echo '<div><label for="VilleClient">Ville du client</label></div>
        <div>
          <input
            type="text"
            name="VilleClient"
            value="'.$client->getVilleClient().'"
            placeholder="Nom du client"
            required
          />
        </div>
        <input type="hidden" name="IdClient" value="'.$id.'">
        <div><input type="submit"></div>

        ';
    }else{
        echo '
        <form action="index.php?p=ActionClient&mode=delete" method="POST">

        <div><label for="NomClient">Nom du client</label></div>
        <div>
          <input
            type="text"
            name="NomClient"
            placeholder="Nom du client"
            value="'.$client->getNomClient().'"
            disabled
            required
          />
        </div>
        <div><label for="VilleClient">Ville du client</label></div>
        <div>
          <input
            type="text"
            name="VilleClient"
            placeholder="Ville du client"
            value="'.$client->getVilleClient().'"
            disabled
            required
          />
          <input type="hidden"  name="IdClient" value="'.$id.'">

        </div>
        <div><input type="submit"></div>
     ';

    }

        ?>

    </form>
  </section>