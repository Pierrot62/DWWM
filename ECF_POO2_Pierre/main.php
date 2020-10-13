<?php

function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");

function afficheTableau($tab)
{
    echo "\n";
    foreach ($tab as $elt) // le tableau est parcouru de la 1ere à la dernière case, les cases sont mises tour à tour dans $elt
    {
        echo $elt->toString() . "\n";
    }
    echo "\n";
}

//CREATION DES OBJETS

//AUTEURS
$auteur[] = new Auteur(["Nom" => "Wilhelm\n", "Prenom" => "Grimm\n", "DateNaissance" => new DateTime("24-02-1786"), "DateMort" => new DateTime("16-12-1859")]);
$auteur[] = new Auteur(["Nom" => "Pierre\n", "Prenom" => "COURQUIN\n", "DateNaissance" => new DateTime("08-02-2000"), "DateMort" => new DateTime(null)]);
$auteur[] = new Auteur(["Nom" => "Rowling \n", "Prenom" => "Joanne Kathleen\n", "DateNaissance" => new DateTime("31-07-1965"), "DateMort" => new DateTime(null)]);
$auteur[] = new Auteur(["Nom" => "Jean\n", "Prenom" => "Paul\n", "DateNaissance" => new DateTime("01-01-2000"), "DateMort" => new DateTime("03-03-2010")]);

//DOCUMENTS
$livre[] = new Livre(["Titre" => "Voyage au bout de la nuit	\n", "Type" => "Livre\n", "NbPage" => "1225", "Auteur" => $auteur[0], "estEmprunte" => strtolower("NON")]);
$livre[] = new Livre(["Titre" => "L'Étranger\n", "Type" => "Livre\n", "NbPage" => "521", "Auteur" => $auteur[0], "estEmprunte" => strtolower("NON")]);

$video[] = new Video(["Titre" => "Fast And Furious\n", "Type" => "Video\n", "SousTitre" => "oui", "Auteur" => $auteur[1], "estEmprunte" => strtolower("oui")]);
$video[] = new Video(["Titre" => "Rebelle\n", "Type" => "Video\n", "SousTitre" => "non", "Auteur" => $auteur[3], "estEmprunte" => strtolower("non")]);

$audio[] = new Enregistrementaudio(["Titre" => "HardRock\n", "Type" => "Audio\n", "Duree" => "3min20", "Auteur" => $auteur[2], "estEmprunte" => strtolower("NON")]);
$audio[] = new Enregistrementaudio(["Titre" => "Opera\n", "Type" => "Audio\n", "Duree" => "4h", "Auteur" => $auteur[3], "estEmprunte" => strtolower("NON")]);


do{
//CHOIX DE L'AFFICHAGE
$choix = readline("Choisez une categorie a afficher (tout/auteur/livre/audio/video) \"stop\" pour quitter : ");

switch ($choix) {
    case "tout":
        afficheTableau($livre);
        afficheTableau($video);
        afficheTableau($audio);
        break;
    case "auteur":
        echo "\n\n*** AUTEURS ***\n\n";
        afficheTableau($auteur);
        break;
    case "livre":
        afficheTableau($livre);
        break;
    case "audio":
        afficheTableau($audio);
        break;
    case "video":
        afficheTableau($video);
        break;
}
}while($choix != "stop");

// afficheTableau($livre);
// afficheTableau($video);
// afficheTableau($audio);