<div></div>
</div>
<footer>
    <h3>&copy;DWWM 2020</h3>
</footer>
<?php 
if (isset($page))
{
    switch ($page[1])
    {
        case "FormFRStagiaire" : echo '<script src="./JS/VerifFormFRStagiaire.js"></script>
        <script src="./JS/MenuFR.js"></script>'
        ;break;
        case "FormFREntreprise" : echo '<script src="./JS/VerifFormFREntreprise.js">
        </script><script src="./JS/MenuFR.js"></script>';break;
        case "FormFRInfosStagiaire" : echo '<script src="./JS/MenuFR.js"></script>';break;
        case "FormFRSujetStage" : echo '<script src="./JS/MenuFR.js"></script>';break;
        case "FormFRCondition" : echo '<script src="./JS/MenuFR.js"></script><script src="./JS/VerifFormFRCondition.js"></script>';break;
        case "FormFREvaluation" : echo '<script src="./JS/MenuFR.js"></script><script src="./JS/VerifFormFREvaluation.js"></script>';break;
        case "ListeUtilisateurs" : echo '<script src="./JS/FiltreUtilisateurs.js"></script>';break;
        case "FormConnexion" : echo '<script src="./JS/VerifFormConnexion.js"></script>';break;
        case "FormStagiaire" : echo '<script src="./JS/VerifFormStagiaire.js"></script>';break;
        case "FormFormation" : echo '<script src="./JS/VerifFormFormation.js"></script>';break;
        case "FormUtilisateur" : echo '<script src="./JS/VerifFormUtilisateur.js"></script>';break;
        case "FormSession" : echo '<script src="./JS/VerifFormSession.js"></script>';break;
        case "FormPeriode" : echo '<script src="./JS/VerifFormPeriode.js"></script>';break;
        case "InterfaceFormateur" : echo '<script src="./JS/InterfaceFormateur.js"></script>';break;

    }
}
      ?>
</body>

</html>