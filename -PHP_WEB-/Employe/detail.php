<?php
include "head.php";
include "test.php";
echo '<body>';
echo '
<div class="banner">
<div>Agence</div>
<div>Service</div>
<div>Nom</div>
<div>Prenom</div>
</div>
';
$idRecherche = $_GET['id'];

foreach ($e as $unEmploye)
{
    if ($unEmploye->getIdEmploye() == $idRecherche)

    {           echo '<div class="Identite">'.$unEmploye->getNom().' '. $unEmploye->getPrenom().'</div>';


        
        echo '<div class="section">';
        echo '<div></div>';
        echo '<div class="categorie">Information</div>';
        echo '<div class="info">';
            echo'<div class="elmInfo">embauche le : '.$unEmploye->getdateEmbauche()->format('Y-m-d').'</div>';
            echo '<div class="elmInfo">Poste : '.$unEmploye->getFonction().' </div>';
            echo '<div class="elmInfo">Salaire :'.$unEmploye->getsalaireAnnuel().' </div>';
        echo '</div>';
        echo '<div></div>';
        echo '</div>';


        echo '<div class="section">';
        echo '<div></div>';
        echo '<div class="categorie">Agence</div>';

        echo '<div class="info">';
            echo'<div class="elmInfo">'.$unEmploye->getAgence()->getNom().'</div>';
            echo'<div class="elmInfo">'.$unEmploye->getAgence()->getadresse().'</div>';
            echo'<div class="elmInfo">'.$unEmploye->getAgence()->getcodePostal().' '.$unEmploye->getAgence()->getville().'</div>';
            echo'<div class="elmInfo">'.$unEmploye->getAgence()->getNom().'</div>';
        echo '</div>';
        echo '<div></div>';
        echo '</div>';


        echo '<div class="section">';
        echo '<div></div>';
        echo '<div class="categorie">Poste</div>';

        echo '<div class="info">';
            echo'<div class="elmInfo">'.$unEmploye->getService().'</div>';
            echo '<div class="elmInfo">'.$unEmploye->getFonction().' </div>';
        echo '</div>';     
        echo '<div></div>';   
        echo '</div>';


        if (count($unEmploye->getEnfants()) >= 1){
            
            echo '<div class="section">';
            echo '<div></div>';
            echo '<div class="categorie">Enfant</div>';

            echo '<div class="info">';
            for ($i=0; $i < count($unEmploye->getEnfants()); $i++) { 

              echo'<div class="elmInfo">'.$unEmploye->getEnfants()[$i]->getNom().' '.$unEmploye->getEnfants()[$i]->getPrenom().' '.$unEmploye->getEnfants()[$i]->getAge().'</div>';
            }
            echo '</div>';
            echo '<div></div>';

        }
    }
}


// echo '<a href="page.php">Retour</a>';
?>
</body>
</html>