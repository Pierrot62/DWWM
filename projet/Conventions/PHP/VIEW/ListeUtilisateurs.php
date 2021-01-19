
<?php
// if (isset($_SESSION["user"]) && $_SESSION["user"]->getIdRole() == 1) {
    $users = UtilisateursManager::getList();
echo '<section class="colonne">
    <h2 class="centre titre">Liste Utilisateurs</h2>


    <div class="centre"> 
    <h1>Sélectionner un rôle pour filtrer :</h1>
    </div>
    <div>
        <div id="admin" class="bouton">Administrateurs</div><div></div>
        <div id="form" class="bouton">Formateurs</div><div></div>
        <div id="stag" class="bouton">Stagiaires</div><div></div>
        <div id="tut" class="bouton">Tuteurs</div><div></div>
        <div id="tous" class="bouton">Tous</div>
    </div>

    <div class="espaceHor"></div>
  

    <div classe="triple>
        <a href=""><button class="bouton"><i class="fas fa-plus-circle"></i> Ajouter</button></a>
    </div>
    <div class="espaceHor"></div>';
    foreach ($users as $unUser) 
    {
        $role= RolesManager::findById($unUser->getIdRole());
        
            echo '<div class="info ">
                <div class="case grande">
                <div>'.$unUser->getNomUtilisateur().'</div>
                <div>'.$unUser->getPrenomUtilisateur().'</div>
                <div class="role">'.$role->getLibelleRole().'</div>
                </div>

                <div class="triple">
                    <div class="mini"></div>
                    <a href=""><button class="bouton"><i class="fas fa-info-circle"></i> Détail</button></a>
                    <div class="mini"></div>
                    <div class="mini"></div>
                    <a href=""><button class="bouton"><i class="fas fa-edit"></i> Modifier</button></a>
                    <div class="mini"></div>
                    <div class="mini"></div>
                    <a href=""><button class="bouton"><i class="fas fa-trash-alt"></i> Supprimer</button></a>
                    <div class="mini"></div>
                </div>';


                echo '
            </div>';
        
    }

    echo ' <div class="espaceHor"></div>
            <div class="info">
            <a href=""><button class="bouton"><i class="far fa-arrow-alt-circle-left"></i> Retour</button></a>
          </div>
        </section>';
// }
?>
<!-- <div class="grande"></div>

<div class="mini"></div>
<button></button>
<div class="mini"></div>
<a href=""></a>
<div></div> -->
<!-- <div>'.$unUser->getNomUtilisateur().'</div>
<div>'.$unUser->getPrenomUtilisateur().'</div>
<div>'.$role->getLibelleRole().'</div> -->
<!-- <div class="bouton"><a class="centre size" href="index.php?page=FormulaireUsers&mode=modifier&id=' . '' . '">Ajouter</a></div> -->