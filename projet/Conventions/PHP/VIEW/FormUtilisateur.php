
<section>
    
<?php

$mode=$_GET['mode'];

switch($mode)
{
    case "ajouter":
    {
        echo'<form action="Index.php?page=ActionUtilisateur&mode=ajouter" method="POST">';
        break;
    }
    case "modifier":
    {
        // echo'<form action="Index.php?page=ActionUtilisateur&mode=modifier" method="POST"';
        echo '<form method="POST" action="Index.php?page=ActionUtilisateur&mode=modifier" method="POST">';
            $idRecherche = $_GET['id'];
            $id = UtilisateursManager::findById($idRecherche);
        break;
    }
    case "details":
    {    
        echo '<form method="POST" >';
            $idRecherche = $_GET['id'];
            $id = UtilisateursManager::findById($idRecherche);
        break;
    }
    case "supprimer":
    {
        echo'<form action="Index.php?page=ActionUtilisateur&mode=supprimer" method="POST"';
        break;
    }
}

if(isset($_GET["id"]))
{
    $choix=UtilisateursManager::findById($_GET["id"]);
    $role = RolesManager::getList();
}
?>

  <form action="" method="POST">
  <?php if($mode != "ajouter") echo  '<input name= "idUtilisateur" value="'.$choix->getIdUtilisateur().'" type= "hidden">';
    if($mode=="ajouter") echo '<input value="" type= "hidden">';
  ?>
        <div class=" ">
            <div class="info colonne ">
                <label for="prenomUtilisateur">Prenom :</label>
                <input type="text" id="prenom" <?php if($mode=="details" || $mode=="supprimer" ) echo '" disabled "'; ?>name="prenomUtilisateur" value="<?php if ($mode != "ajouter") echo $choix->getPrenomUtilisateur() ;?>" required pattern="[a-zA-Z- ]{3,}">
            </div>
            <div class="info colonne ">
                <label for="nomUtilisateur">Nom :</label>
                <input type="text" id="nom" <?php if($mode=="details" || $mode=="supprimer" ) echo '" disabled "'; ?>name="nomUtilisateur" value="<?php if ($mode != "ajouter") echo $choix->getNomUtilisateur() ;?>" required pattern="[a-zA-Z- ]{3,}">
            </div>
        </div>
        <div>

            <div class="info colonne  grande">
                <label for="emailUtilisateur">Adresse E-mail :</label>
                <input type="text" id="email" <?php if($mode=="details" || $mode=="supprimer" ) echo '" disabled "'; ?>name="emailUtilisateur" required
                    pattern="^[a-z]+[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$" value="<?php if ($mode != "ajouter") echo $choix->getEmailUtilisateur() ;?>">
            </div>
        </div>

        <div>
            <div class="info colonne center relatif">
                <label for="mdpUtilisateur">Mot de passe :</label>
                <input type="password" id="mdp" <?php if($mode=="details" || $mode=="supprimer" ) echo '" disabled "'; ?>name="mdpUtilisateur" value="<?php if ($mode != "ajouter") echo $choix->getMdpUtilisateur() ;?>" required
                    pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[\d])(?=.*[!@#\$%\^&\*+])[a-zA-Z\d!@#\$%\^&\*+]{8,}$">
                <div class="mini">
                    <div class="oeil">
                        <i class="fas fa-eye"></i>
                    </div>
                </div>
                <div class="aideMdp absolu">
                    <div>Liste des critères à respecter !! </div>
                    <div>
                        <div class="mini"><i class="far fa-times-circle rouge"></i>
                        </div>
                        <div> 8 caractères minimum</div>
                    </div>
                    <div>
                        <div class="mini"><i class="far fa-times-circle rouge"></i>
                        </div>
                        <div>majuscule(s)</div>
                    </div>
                    <div>
                        <div class="mini"><i class="far fa-times-circle rouge"></i>
                        </div>
                        <div>minuscule(s)</div>
                    </div>
                    <div>
                        <div class="mini"><i class="far fa-times-circle rouge"></i>
                        </div>
                        <div>nombre(s)</div>
                    </div>
                    <div>
                        <div class="mini"><i class="far fa-times-circle rouge"></i>
                        </div>
                        <div>caractères spéciaux</div>
                    </div>
                </div>
            </div>


            <div class="info colonne center">
                <label for="confirmation">Confirmation de mot de passe :</label>
                <input type="password" id="confirmation" <?php if($mode=="details" || $mode=="supprimer" ) echo '" disabled "'; ?>name="confirmation" value="<?php if ($mode != "ajouter") echo $choix->getMdpUtilisateur() ;?>" title="remettre le même mot de passe"
                    required>
            </div>
        </div>

<?php 
    // $d1= $choix->getDatePeremption();
    // $date = DateTime::createFromFormat('d/m/Y', $d1);
    // var_dump($date);
    // echo $date->format('Y-m-d')
    
?>

        <div>
            <div class="info colonne center">
                <label for="datePeremption">Date de peremption :</label>
                <input type="date" id="datePeremtion" <?php if($mode=="details" || $mode=="supprimer" ) echo '" disabled "'; ?>name="datePeremption"  value="<?php if ($mode != "ajouter") echo $choix->getDatePeremption();?>" >
            </div>
            <div class="info colonne center">
                <label for="idRole">Role :</label>
                <select name="idRole" id="role">
                <?php 
                if ($mode != "ajouter") {
                foreach ( $role as $unRole )
                {
                    
                    $sel = "";
                    if ($unRole->getIdRole()==$choix->getIdRole()){
                        $sel="selected";
                    }
                    echo '<option value="'.$unRole->getIdRole().'" '.$sel; 
                    if($mode=="details" || $mode=="supprimer") echo' disabled '; echo '>'.$unRole->getLibelleRole().'</option>';
                }
            }else{
                
                   echo' <option value="defaut" selected>-------------------------------Choisissez un
                        Role-------------------------------</option>';
                    
                    $role = RolesManager::getList();
                    foreach ($role as $unRole) {
                        echo '<option value="' . $unRole->getIdRole() . '">' . $unRole->getLibelleRole() . '</option>';
   
            }}
            ?>
                </select>

            </div>
        </div>
        <div>
            <div class="info  center">
            
                <?php

                    switch($mode)
                    {
                        case "ajouter":
                        {
                            echo'<button id="submit" class="bouton" type="submit" disabled><i class="fas fa-paper-plane"></i>&nbsp Ajouter</button>';
                            break;
                        }
                        case "modifier":
                        {
                            echo'<button class="bouton"><i class="fas fa-edit"></i> &nbsp Modifier</button>';
                            break;
                        }
                       
                        case "supprimer":
                        {
                            echo'<button class="bouton"><i class="fas fa-trash-alt"></i>&nbsp Supprimer</button>';
                            break;
                        }
                        
                    }
                    echo'<div class="mini"></div>';
                    echo'<a href="Index.php?page=ListeUtilisateurs"><div class="bouton"><i class="far fa-arrow-alt-circle-left"></i>&nbsp Retour</div></a>';
                ?>


               </div>
        </div>
        <div>
            <div class="info center">
                <div class="erreur"></div>
            </div>
        </div>

    </form>

</section>