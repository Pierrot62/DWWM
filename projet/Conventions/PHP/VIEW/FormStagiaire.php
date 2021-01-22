<section>
    
<?php

$mode=$_GET['mode'];
// $type = $_GET['type'];
switch($mode)
{
    case "ajouter":
    {
        // if ($type=="file")
        // {
        //     echo'<form action="Index.php?page=ActionStagiaire&mode=ajouter&type=file" method="POST">';
        // }
        // else
        // {
            echo'<form action="Index.php?page=ActionStagiaire&mode=ajouter" method="POST">';
            break;
        // }
    }
    case "modifier":
    {   
        // if ($type=="file")
        // {
        //     echo'<form action="Index.php?page=ActionStagiaire&mode=ajouter&type=file" method="POST">';
        // }
        // else
        // {
            echo'<form action="Index.php?page=ActionStagiaire&mode=modifier" method="POST"';
            break;
        // }
    }
    case "details":
    {    
        echo'<form action="Index.php?page=ActionStagiaire&mode=details" method="POST"';
        break;
    }
    case "supprimer":
    {
        echo'<form action="Index.php?page=ActionStagiaire&mode=supprimer" method="POST"';
        break;
    }
}

if(isset($_GET["id"]))
{
    $obj=StagiairesManager::findById($_GET["id"]);
}
?>

<div class="espaceHor"></div>
<div class="colonne">
    <?php
    if ($mode =="ajouter" || $mode=="modifier"){
        echo'<div class="info">
            
            <label for="file">Ajouter fichier</label>
            <div class="mini"></div>
            <input type="file" name="file">
            </div>
            <div class="espaceHor"></div>';
    }?>
    <input name="idStagiaire" type="hidden" <?php if(isset($obj)) echo'value="'.$obj->getIdStagiaire().'"';?>>
    <div >
            <div class="info">
            <div class="grande"></div>
                <label for="genreStagiaire">Homme</label>
                <input type="radio" <?php if($mode == "modifier" || $mode == "ajouter") echo'required';?> id="homme" name="genreStagiaire" value="M" <?php if($mode !="ajouter" && $obj->getGenreStagiaire()=="M") echo'checked';if($mode =="details" ||$mode=="supprimer") echo'disabled';?>>
            </div>
            <div class="mini"></div>
            <div class="info">
                <label for="genreStagiaire">Femme</label>
                <input type="radio" <?php if($mode == "modifier" || $mode == "ajouter") echo'required';?> id="femme" name="genreStagiaire" value="F" <?php if($mode!="ajouter" && $obj->getGenreStagiaire()=="F") echo'checked';if($mode =="details" ||$mode=="supprimer") echo'disabled'?>>
                <div class="grande"></div>
            </div>
    </div>
    <div class="info">
        <label class="double" for="nomStagiaire">Nom</label>
        <input class="double" name="nomStagiaire" id="nom" pattern="[a-zA-Z- ]{3,}" <?php if($mode!="ajouter") echo'value="'.$obj->getNomStagiaire().'"';if($mode=="details"||$mode=="supprimer")echo'disabled';?>><div class="erreur"></div>
    </div>
    <div class="info">
        <label class="double" for="prenomStagiaire">Prénom</label>
        <input class="double" name="prenomStagiaire" id="prenom" pattern="[a-zA-Z- ]{3,}" <?php if($mode!="ajouter") echo'value="'.$obj->getPrenomStagiaire().'"';if($mode=="details"||$mode=="supprimer")echo'disabled';?>><div class="erreur"></div>
    </div>
    <div class="info">
        <label class="double" for="numBenefStagiaire">Numéro de bénéficiaire</label>
        <input class="double" name="numBenefStagiaire" id="numBenef" pattern="\d{8}" <?php if($mode!="ajouter") echo'value="'.$obj->getNumBenefStagiaire().'"';if($mode=="details"||$mode=="supprimer")echo'disabled';?>><div class="erreur"></div>
    </div>
   
    <div class="info">
        <label class="double" for="numSecuStagiaire">Numéro de sécurité sociale</label>
    <input class="double" name="numSecuStagiaire" id="numSecu" pattern="^[1|2][0-9]{2}(0[1-9]|1[0-2])(2[AB]|[0-9]{2})[0-9]{3}[0-9]{3}$" <?php if($mode!="ajouter") echo'value="'.$obj->getNumSecuStagiaire().'"';if($mode=="details"||$mode=="supprimer")echo'disabled';?>><div class="erreur"></div>
    </div>
    <div class="info">
        <label class="double" for="dateNaissanceStagiaire">Date de naissance</label>
        <input class="double" name="dateNaissanceStagiaire" id="ddn" type="date" <?php if($mode!="ajouter") echo'value="'.$obj->getDateNaissanceStagiaire().'"';if($mode=="details"||$mode=="supprimer")echo'disabled';?>><div class="erreur"></div>
    </div>
    <div class="info">
        <label class="double" for="emailStagiaire">Email</label>
        <input class="double" name="emailStagiaire" id="emailStagiaire" pattern="^[a-z]+[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$" <?php if($mode!="ajouter") echo'value="'.$obj->getEmailStagiaire().'"';if($mode=="details"||$mode=="supprimer")echo'disabled';?>><div class="erreur"></div>
    </div>
    
</div>
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
    case "details":
    {
        echo'<button class="bouton"><i class="fas fa-info-circle"></i> Afficher</button>';
        break;
    }
    case "supprimer":
    {
        echo'<button class="bouton"><i class="fas fa-trash-alt"></i> Supprimer</button>';
        break;
    }
}
echo'<div class="demi"></div>';
echo'<a href="Index.php?page=ListeStagiaires"><button class="bouton"><i class="far fa-arrow-alt-circle-left"></i> Retour</button></a>';
?>
<div></div>
</div>
</section>