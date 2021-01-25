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
        case "FormFRStagiaire" : echo '<script src="./JS/VerifFormFRStagiaire.js"></script>';break;
        case "FormStagiaire" : echo '<script src="./JS/VerifFormStagiaire.js"></script>';break;
        case "FormFREntreprise" : echo '<script src="./JS/VerifFormFREntreprise.js"></script>';break;
        case "ListeUtilisateurs" : echo '<script src="./JS/FiltreUtilisateurs.js"></script>';break;
        case "FormSession" : echo '<script src="./JS/VerifFormSession.js"></script>';break;
        case "FormPeriode" : echo '<script src="./JS/VerifFormPeriode.js"></script>';break;
        case "InterfaceFormateur" : echo '<script src="./JS/InterfaceFormateur.js"></script>';break;

    }
}
      ?>
</body>

</html>