<?php

function autoload($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("autoLoad");

$date1 = new DateTime("30-12-2020");
$date3 = new DateTime("30-10-2002");
$date4 = new DateTime("10-05-1999");
$date5 = new DateTime("15-12-2015");
$e1 = new Employe(["dateEmbauche" => $date1, "salaire" => 50]);
$e2 = new Employe(["dateEmbauche" => new DateTime("30-11-2010"), "salaire" => 10]);
$e3 = new Employe(["dateEmbauche" => $date3, "salaire" => 20]);
$e4 = new Employe(["dateEmbauche" => $date4, "salaire" => 25]);
$e5 = new Employe(["dateEmbauche" => $date5, "salaire" => 15]);

//Ordre de transfert
 $dateAujourdhui = new DateTime('now');
// $annee = $dateAujourdhui->format('Y');
// $jourDePrime = new DateTime('30-11-' . $annee);
$jourDePrime = (new DateTime())->setDate($dateAujourdhui->format('Y'),11,30);
echo "Jour de prime :\n";
var_dump($jourDePrime);
echo "Jour aujourd'hui :\n";
var_dump($dateAujourdhui);

if ($jourDePrime < $dateAujourdhui)
{ //on compare les dates
    echo "L'ordre de transfert a été envoyé à la banque :" . $e1->prime();
}
else
{
    echo "L'ordre de transfert n'a pas été envoyé à la banque";
}
