<section>
    
<?php

$mode=$_GET['mode'];

switch($mode)
{
    case "ajouter":
    {
        echo'<form action="Index.php?page=ActionStagiaire&mode=ajouter" method="POST">';
        break;
    }
    case "modifier":
    {
        echo'<form action="Index.php?page=ActionStagiaire&mode=modifier" method="POST"';
        break;
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
    <input name="idStagiaire" type="hidden" <?php if(isset($obj)) echo'value="'.$obj->getIdStagiaire().'"';?>>
    <div class="info">
        <label class="double" for="nomStagiaire">Nom</label>
        <input class="double" name="nomStagiaire" pattern="[a-zA-Z- ]{3,}" <?php if($mode!="ajouter") echo'value="'.$obj->getNomStagiaire().'"';if($mode=="details"||$mode=="supprimer")echo'disabled';?>><div></div>
    </div>
    <div class="info">
        <label class="double" for="prenomStagiaire">Prénom</label>
        <input class="double" name="prenomStagiaire" pattern="[a-zA-Z- ]{3,}" <?php if($mode!="ajouter") echo'value="'.$obj->getPrenomStagiaire().'"';if($mode=="details"||$mode=="supprimer")echo'disabled';?>><div></div>
    </div>
    <div class="info">
        <label class="double" for="numBenefStagiaire">Numéro de bénéficiaire</label>
        <input class="double" name="numBenefStagiaire" pattern="\d{8}" <?php if($mode!="ajouter") echo'value="'.$obj->getNumBenefStagiaire().'"';if($mode=="details"||$mode=="supprimer")echo'disabled';?>><div></div>
    </div>
    <div class="info">
        <label class="double" for="genreStagiaire">Genre</label>
        <input class="double" name="genreStagiaire" <?php if($mode!="ajouter") echo'value="'.$obj->getGenreStagiaire().'"';if($mode=="details"||$mode=="supprimer")echo'disabled';?>><div></div>
    </div>
    <div class="info">
        <label class="double" for="numSecuStagiaire">Numéro de sécurité sociale</label>
    <input class="double" name="numSecuStagiaire" pattern="^[1|2][0-9]{2}(0[1-9]|1[0-2])(2[AB]|[0-9]{2})[0-9]{3}[0-9]{3}" <?php if($mode!="ajouter") echo'value="'.$obj->getNumSecuStagiaire().'"';if($mode=="details"||$mode=="supprimer")echo'disabled';?>><div></div>
    </div>
    <div class="info">
        <label class="double" for="dateNaissanceStagiaire">Date de naissance</label>
        <input class="double" name="dateNaissanceStagiaire" type="date" <?php if($mode!="ajouter") echo'value="'.$obj->getDateNaissanceStagiaire().'"';if($mode=="details"||$mode=="supprimer")echo'disabled';?>><div></div>
    </div>
    <div class="info">
        <label class="double" for="emailStagiaire">Email</label>
        <input class="double" name="emailStagiaire" pattern="^[a-z]+[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$" <?php if($mode!="ajouter") echo'value="'.$obj->getEmailStagiaire().'"';if($mode=="details"||$mode=="supprimer")echo'disabled';?>><div></div>
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