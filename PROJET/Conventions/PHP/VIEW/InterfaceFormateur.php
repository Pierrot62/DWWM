<section class="colonne">
<div class="espaceHor"></div>
<div>
<?php
    if($_SESSION['utilisateur']->getIdRole()=="1"||$_SESSION['utilisateur']->getIdRole()=="2")
    {
        if ($_SESSION['utilisateur']->getIdRole()=="1")
        {
            $lesFormations=FormationsManager::getList();
        }
        else{
            $lesFormations=AnimationsManager::getByUtilisateur($_SESSION['utilisateur']->getIdUtilisateur());
        }
         echo'<div class="infos centre">
         <label for="selectFormation">Formation&nbsp;:&nbsp;</label> 
         <select name="selectFormation" id="selectFormation">';
         if (count($lesFormations)>1)
         {
             echo'<option value="default" selected>Selectionnez une formation</option>';
             foreach($lesFormations as $uneFormation)
             {
                 $idFormation=$uneFormation->getIdFormation();
                 $libelleFormation=FormationsManager::findById($idFormation)->getLibelleFormation();
                 echo'<option value="'.$idFormation.'">'.$libelleFormation.'</option>';
             }
         }
         else
         {
             $idFormation=$lesFormations[0]->getIdFormation();
             $libelleFormation=FormationsManager::findById($idFormation)->getLibelleFormation();
             echo'<option value="'.$idFormation.'" selected >'.$libelleFormation.'</option>';
         }
         echo'</select></div>
            
            
            <div class="centre">
                <label for="selectSession">N° Offre&nbsp;:&nbsp;</label>
                <select id="selectSession">
            <option value="defaut">Aucune Offre à Afficher</option>
            </select></div>
            </div>
        <div class="espaceHor"></div>
        <div>
            <div><a class="bouton" id="liste">Liste des stagiaires</a></div>
            <div><a class="bouton" id="objectif">Objectifs P.A.E</a></div>
        </div>
        <div class="espaceHor"></div>
        <div class="colonne" id="affichage">
        </div>
        </section>';
    }