<?php

/** Pour Antoine
 *
 * J'ai enlevé la class centre sur le form
 * J'ai ajouté une div autour des input / select
 * J'ai ajouté la class info sur les div qui regroupe les label et leur input
 * J'ai ajouté la class titreColonne sur la div autour des informations de stage
 */
$mode = $_GET['mode'];
if (isset($_GET['id'])) // si l'id est renseigné
{
    $idRecu = $_GET['id'];
    if ($idRecu != false)
    {
        $idChoisi = SessionsFormationsManager::findById($idRecu);
        $idForma = FormationsManager::findById($idChoisi->getIdFormation());
        $listePae = PeriodesStagesManager::getListBySession($idChoisi->getIdSessionFormation());

    }
}
?>
<section class = "colonne">
<?php
switch ($mode)
{
    case "ajout":    {
            echo '<div class = "case centre noborder">
                    <h2>Ajouter une Session</h2>
                </div>
            <form   action="index.php?page=ActionSession&mode=ajoutSes" method="POST">';
            break;
        }
    case "modif":    {
            echo '<div class = "case centre noborder">
                    <h2>Modifier une Session</h2>
                </div>
            <form  action="index.php?page=ActionSession&mode=modif&id=' . $idChoisi->getIdSessionFormation() . '" method="POST">
    <input name="idSessionFormation"  value="' . $idChoisi->getIdSessionFormation() . '" type="hidden" />';
            break;
        }
    case "delete":    {
            echo '<div class = "case centre noborder">
                    <h2>Supprimer une Session</h2>
                    </div>
            <form  action="index.php?page=ActionSession&mode=delete&id=' . $idChoisi->getIdSessionFormation() . '" method="POST">
    <input name="idSessionFormation"  value="' . $idChoisi->getIdSessionFormation() . '" type="hidden" />';
            break;
        }
    case "detail":    {
            echo '<div class = "case centre noborder">
                    <h2>Détail d\'une Session</h2>
                </div>
            <form >
<input name="idSessionFormation"  value="' . $idChoisi->getIdSessionFormation() . '" type="hidden" />';
            break;
        }
}

?>
            <div class = "colonne info">
                <label for="numOffreFormation">Numéro d'offre: </label>
            <div>   <input name="numOffreFormation" <?php if ($mode != "ajout")
{
    echo 'value="' . $idChoisi->getNumOffreFormation() . '"';}if ($mode == "delete" || $mode == "detail")
{
    echo 'disabled';
}
?>/></div>
            </div>
<div class = "colonne info">
             <label for="idFormation">formation: </label>
        <?php $formations = FormationsManager::getList();
if ($mode === "ajout")
{
    echo '<div ><select name="idFormation">
            <option selected="selected">----Choisissez une Formation----</option>';
    foreach ($formations as $uneFormation)
    {
        echo '<option value="' . $uneFormation->getIdFormation() . '">' . $uneFormation->getLibelleFormation() . '</option>';
    }
    echo '</select></div>';
}
else
{
    if ($mode == "delete" || $mode == "detail")
    {
        echo '<div class="case">' . $idForma->getLibelleFormation() . '</div>';
        $disabled = "disabled";
    }
    else
    { /** mode modif */
        echo '<select name="idFormation">';
        foreach ($formations as $uneFormation)
        {
            $sel = "";
            if ($uneFormation->getIdFormation() == $idForma->getIdFormation())
            {
                $sel = " selected ";
            }
            echo '<option value="' . $uneFormation->getIdFormation() . '"  ' . $sel . '>' . $uneFormation->getLibelleFormation() . '</option>';
        }
        echo '</select>';
        $disabled = " ";

    }
    $nbPae = count($listePae);
    echo '<input type="hidden" name="nbPae" value="' . $nbPae . '"/>';
    for ($i = 0; $i < $nbPae; $i++)
    {
        echo '<div class="colonne info titreColonne" >
                <div>
                <input type="hidden" name="idPeriode' . $i . '" value="' . $listePae[$i]->getIdPeriode() . '"/>
                <input type="hidden" name="idSessionFormation" value="' . $listePae[$i]->getIdSessionFormation() . '"/>
                <div class="colonne" >
                <label for="dateDebutPAE">Date de début de stage: </label>
                <input type="date" name="dateDebutPAE' . $i . '" value="' . $listePae[$i]->getDateDebutPAE() . '" ' . $disabled . ' />
                </div>
                <div class="colonne" >
                <label for="dateFinPAE">Date de fin de stage: </label>
                <input type="date" name="dateFinPAE' . $i . '" value="' . $listePae[$i]->getDateFinPAE() . '" ' . $disabled . ' />
                </div>
                </div>
                <div class="colonne" >
                <label for="dateRapportSuivi">Date Rapport de suivi: </label>
                <input type="date" name="dateRapportSuivi' . $i . '" value="' . $listePae[$i]->getDateRapportSuivi() . '" ' . $disabled . ' />
                </div>
                <div class="colonne" >
                <label for="objectifPAE">Objectif de stage: </label>
                <input type="textarea" name="objectifPAE' . $i . '" value="' . $listePae[$i]->getObjectifPAE() . '" ' . $disabled . ' />
                </div>
                </div>';
    }

}

?>

</div>
<div>
<?php
switch ($mode)
{
    case "ajout":
            {
            echo '<div class="mini">
            </div><button class="bouton" type="submit"><i class="fas fa-plus-circle"></i> Ajouter une session</button>
            </form>';
            break;
        }
    case "modif":
            {
            echo '<div class="mini"></div>
            <button class="bouton" type="submit"><i class="fas fa-edit"></i> Valider</button>
            </form>
            <button id="ajout1p" class="bouton" type="submit"><i class="fas fa-edit"></i> Ajout Periode</button>';

            break;
        }
    case "delete":
            {
            echo '<div class="mini"></div>
            <button class="bouton" type="submit"><i class="fas fa-trash-alt"></i> Supprimer la session</button>
            </form>';
            break;
        }
}
echo '<div class="mini"></div>';
?>
</div>
<div class="mini"></div>
<div class="info"><a href="Index.php?page=ListeSessions"><button class="bouton">Retour</button></a></div>
<div class="mini"></div>
</section>
