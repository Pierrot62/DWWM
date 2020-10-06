<?php

function autoload($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("autoLoad");

$e1 = new Employe(["Nom" => "Aarouss", "Prenom" => "Sofiane", "dateEmbauche" => new DateTime("0-12-2020"), "fonction" => "Eleveur de punaise", "salaireAnnuel" => "14" , "Service" => "Animalerie"]);
$e2 = new Employe(["Nom" => "Courquin", "Prenom" => "Pierre", "dateEmbauche" => new DateTime("12-03-2006"), "fonction" => "Medecin", "salaireAnnuel" => "40", "Service" => "Medecine"]);
$e3 = new Employe(["Nom" => "Rjeb", "Prenom" => "Zied", "dateEmbauche" => new DateTime("15-09-2015"), "fonction" => "Kebabiste", "salaireAnnuel" => "30", "Service" => "Restauration"]);
$e4 = new Employe(["Nom" => "Balair", "Prenom" => "Quentin", "dateEmbauche" => new DateTime("03-03-2003"), "fonction" => "Plaquiste", "salaireAnnuel" => "20", "Service" => "batiment"]);
$e5 = new Employe(["Nom" => "Cugny", "Prenom" => "Maxime", "dateEmbauche" => new DateTime("27-08-2007"), "fonction" => "Homme de menage", "salaireAnnuel" => "50", "Service" => "Netoyage"]);
$tabEmploye = [$e1, $e2, $e3, $e4, $e5];

asort($tabEmploye);
var_dump($tabEmploye);
foreach ($tabEmploye as $elt) {
    echo $elt->toString() . "\n";
}

//Nombre d'employes
//Tableau avec les employes
$tabEmploye = [$e1, $e2, $e3, $e4, $e5];
//Taille du tableau = nb d'employé (5 dans ce cas present)
$nbEmploye = count($tabEmploye);

echo ($nbEmploye);

//Ordre de transfert
 $dateAujourdhui = new DateTime('now');
// $annee = $dateAujourdhui->format('Y');
// $jourDePrime = new DateTime('30-11-' . $annee);
$jourDePrime = (new DateTime())->setDate($dateAujourdhui->format('Y'),11,30);
// echo "Jour de prime :\n";
// var_dump($jourDePrime);
// echo "Jour aujourd'hui :\n";
// var_dump($dateAujourdhui);

// if ($jourDePrime < $dateAujourdhui)
// { //on compare les dates
//     echo "L'ordre de transfert a été envoyé à la banque :" . $e1->prime();
// }
// else
// {
//     echo "L'ordre de transfert n'a pas été envoyé à la banque";
// }
