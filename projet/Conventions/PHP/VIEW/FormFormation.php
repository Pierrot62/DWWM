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

if (isset($_GET["id"]))
{
    $obj =FormationsManager::findById($_GET["id"]);
}
?>

    <div class="espaceHor"></div>
    <div class="colonne">
        <input name="idFormation" type="hidden" <?php if(isset($obj)) echo'value="'.$obj->getIdFormation().'"';?>>
        <div class="info">
            <label class="double" for="libelleFormation">Nom de la formation</label>
            <input class="double" name="libelleFormation" <?php if($mode != "ajouter") echo'value="'.$obj->getLibelleFormation().'"';if($mode=="supprimer")echo'disabled';?>>
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
    case "supprimer":
    {
        echo'<button class="bouton"><i class="fas fa-trash-alt"></i> Supprimer</button>';
        break;
    }
}
echo'<div class="demi"></div>';
echo'<a href="Index.php?page=ListeFormations"><button class="bouton"><i class="far fa-arrow-alt-circle-left"></i> Retour</button></a>';
?>
<div></div>
</div>
</section>