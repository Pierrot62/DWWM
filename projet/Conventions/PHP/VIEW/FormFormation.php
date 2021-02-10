<section>
<?php

$mode=$_GET['mode'];

switch($mode)
{
    case "ajouter":
    {
        echo'<form action="Index.php?page=ActionFormation&mode=ajouter" method="POST">';
        break;
    }
    case "modifier":
    {
        echo'<form action="Index.php?page=ActionFormation&mode=modifier" method="POST">';
        break;
    }
    case "supprimer":
    {
        echo'<form action="Index.php?page=ActionFormation&mode=supprimer" method="POST">';
        break;
    }
}
$idUtilisateur="";
if (isset($_GET["id"]))
{
    if($mode !="ajouter")
    {
        $obj =FormationsManager::findById($_GET["id"]);
        // var_dump($obj);
        $animations = AnimationsManager::getByFormation($obj->getIdFormation());
        // var_dump($animations);
        foreach($animations as $elt)
        {
            $idAnimation = $elt->getIdAnimation();
        }
        $animation = AnimationsManager::findById($idAnimation);
        $idUtilisateur = $animation->getIdUtilisateur();
        // var_dump($idUtilisateur);
    }
}
?>
<div class="espaceHor"></div>
<div class="colonne">
    <input name="idFormation" type="hidden" <?php if(isset($obj)) echo'value="'.$obj->getIdFormation().'"';?>>
    <div class="info">
        <label class="double" for="libelleFormation">Nom de la formation</label>
        <input class="double" name="libelleFormation" <?php if($mode != "ajouter") echo'value="'.$obj->getLibelleFormation().'"';if($mode=="supprimer")echo'disabled';?>>
    </div>
    <div class="info">
        <label class="double" for="grn">GRN</label>
        <input class="double" name="grn" <?php if($mode != "ajouter") echo'value="'.$obj->getGrn().'"';if($mode=="supprimer")echo'disabled';?>>
    </div>

    <div class="info">
        <label class="double" for="finaliteFormation">Finalité de la formation</label>
        <input class="double" name="finaliteFormation" <?php if($mode != "ajouter") echo'value="'.$obj->getFinaliteFormation().'"';if($mode=="supprimer")echo'disabled';?>>
    </div>
</div>
<?php
echo '<div class="info">
        <label class="double" for="idUtilisateur">Formateur</label>';
        if($mode!="ajouter"){echo'<input type="hidden" name="idAncienUtilisateur" value="' .$idUtilisateur.'">';} 
?>
<input type="hidden" name="utilisateur" value="">
<select class="double" id="selectUtilisateur" name="idUtilisateur" multiple <?php if($mode=="supprimer")echo'disabled';?>>
<?php
$sel="";
    
$liste = UtilisateursManager::getListByRole(2);
foreach($liste as $elt)
{           
    if($elt->getIdUtilisateur()== $idUtilisateur)
    {
        $sel="selected";
    }
    else
    {
        $sel="";
    }
    echo '<option ' . $sel . ' value="' . $elt->getIdUtilisateur() . '">' . $elt->getNomUtilisateur(). ' ' . $elt->getPrenomUtilisateur() . '</option>';
}
        

echo'</select>';

?>
    
    <div class="espaceHor"></div>
<div><div></div>
<?php

switch($mode)
{
    case "ajouter":
    {
        echo'<button class="bouton"><i class="fas fa-plus-circle"></i> Ajouter</button>';
        break;
    }
    case "modifier":
    {
        echo'<button class="bouton"><i class="fas fa-edit"></i> Modifier</button>';
        break;
    }
    case "supprimer":
    {
        echo'<button class="bouton"><i class="fas fa-trash-alt"></i> Supprimer</button>';
        break;
    }
}
echo'<div class="demi"></div>';
echo'<a href="Index.php?page=ListeFormations"><button class="bouton" type="button"><i class="far fa-arrow-alt-circle-left"></i> Retour</button></a>';
?>
<div></div>
</div>
</section>