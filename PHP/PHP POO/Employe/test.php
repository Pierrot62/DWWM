<?php
function autoload($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("autoload");

/*
Description : Affiche les éléments du tableau séparés par une tabulation // Utilisation du foreach
$tab : tableau à afficher
 */
function afficheTableau($tab)
{
    echo "\n";
    foreach ($tab as $elt) // le tableau est parcouru de la 1ere à la dernière case, les cases sont mises tour à tous dans $elt
    {
        echo $elt->toString() . "\n";
    }
    echo "\n";
}

$e[] = new Employe(["Nom" => "Aarouss", "Prenom" => "Sofiane", "dateEmbauche" => new DateTime("01-12-2020"), "fonction" => "Eleveur de punaise", "salaireAnnuel" => "14", "Service" => "Nettoyage",$a1]);
$e[] = new Employe(["Nom" => "Courquin", "Prenom" => "Pierre", "dateEmbauche" => new DateTime("12-03-2006"), "fonction" => "Gynecologue", "salaireAnnuel" => "40", "Service" => "Medecine",$a3]);
$e[] = new Employe(["Nom" => "Rjeb", "Prenom" => "Zied", "dateEmbauche" => new DateTime("15-09-2015"), "fonction" => "Kebabiste", "salaireAnnuel" => "30", "Service" => "Restauration",$a1]);
$e[] = new Employe(["Nom" => "Balair", "Prenom" => "Quentin", "dateEmbauche" => new DateTime("03-03-2003"), "fonction" => "Plaquiste", "salaireAnnuel" => "20", "Service" => "batiment",$a2]);
$e[] = new Employe(["Nom" => "Cugny", "Prenom" => "Maxime", "dateEmbauche" => new DateTime("27-08-2007"), "fonction" => "Homme de menage", "salaireAnnuel" => "50", "Service" => "Nettoyage",$a3]);

echo "Il y a " . Employe::getCompteur() . " créé \n";

//TRI

//AfficheTableau($e);
//usort($e,array("Employe","compareToNomPrenom"));
//AfficheTableau($e);
usort($e, array("Employe", "compareToServiceNomPrenom"));
AfficheTableau($e);


//Masse Salariale
$masseSalarialeTotale = 0;
foreach ($e as $elt)
{
    $masseSalarialeTotale += $elt->masseSalariale();
}
echo "La masse salariale totale est de " . $masseSalarialeTotale . "\n";



//Ordre de transfert PRIME
$dateAujourdhui = new DateTime('now');
// $annee = $dateAujourdhui->format('Y');
// $jourDePrime = new DateTime('30-09-' . $annee);
$jourDePrime = (new DateTime())->setDate($dateAujourdhui->format('Y'), 9, 30);
// echo "Jour de prime :\n";
// var_dump($jourDePrime);
// echo "Jour aujourd'hui :\n";
// var_dump($dateAujourdhui);

if ($jourDePrime < $dateAujourdhui)
{ //on compare les dates
    foreach ($e as $elt)
    {
        echo "L'ordre de transfert a été envoyé à la banque pour " . $elt->getNom()." " . $elt->getPrenom(). " d'un montant de ".$elt->prime()."\n";
    }
}
else
{
    echo "L'ordre de transfert n'a pas été envoyé à la banque\n";
}



/**************************AGENCE******************************/

$a1 = new agence(["Nom" => "Bim", "adresse" => "45 rue de la soif", "codePostal" => "59000" , "ville" => "Lille"]);
$a2 = new agence(["Nom" => "Bam", "adresse" => "154 avenue du pinard", "codePostal" => "62300", "ville" => "Lens"]);
$a3 = new agence(["Nom" => "Boom", "adresse" => "2Bis allé des alcooliques", "codePostal" => "13000", "ville" => "Marseille"]);



echo "l'agence de l'employe est  ". $e[$i]->getNom()."\n";
