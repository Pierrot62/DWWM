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
        case "FormFREntreprise" : echo '<script src="./JS/VerifFormEntreprise.js"></script>';break;
        case "ListeUtilisateurs" : echo '<script src="./JS/FiltreUtilisateurs.js"></script>';break;
        case "FormSessions" : echo '<script src="./JS/VerifFormSession.js"></script>';break;
        case "FormPeriodes" : echo '<script src="./JS/VerifFormPeriode.js"></script>';break;

    }
}
      ?>
</body>

</html>