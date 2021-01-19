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
        case "FormFRStagiaire" : echo '<script src="./JS/VerifFormStagiaire.js"></script>';break;
        case "FormFREntreprise" : echo '<script src="./JS/VerifFormEntreprise.js"></script>';break;
        case "ListeUtilisateurs" : echo '<script src="./JS/FiltreUtilisateurs.js"></script>';break;

    }
}
      ?>
</body>

</html>