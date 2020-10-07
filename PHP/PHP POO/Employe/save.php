//AGENCES
$a[] = new agence(["Nom" => "Bim", "adresse" => "45 rue de la soif", "codePostal" => "59000", "ville" => "Lille", "Restaurant" => "Restaurant sur place"]);
$a[] = new agence(["Nom" => "Bam", "adresse" => "154 avenue du pinard", "codePostal" => "62300", "ville" => "Lens", "Restaurant" => "Tiket Restaurant"]);
$a[] = new agence(["Nom" => "Boom", "adresse" => "2Bis allé des alcooliques", "codePostal" => "13000", "ville" => "Marseille", "Restaurant" => "Tiket Restaurant"]);

//ENFANTS
$enfant1 = new enfant(["Nom" => "Hovelynck", "prenom" => "Bryan", "age" => "5"]);
$enfant2 = new enfant(["Nom" => "Daniel", "prenom" => "Antoine", "age" => "15"]);
$enfant3 = new enfant(["Nom" => "Poppins", "prenom" => "Marie", "age" => "17"]);
$enfant4 = new enfant(["Nom" => "Mayeux", "prenom" => "Brunos", "age" => "13"]);
$enfant5 = new enfant(["Nom" => "Dubrunfaut", "prenom" => "Clement", "age" => "2"]);
$enfant6 = new enfant(["Nom" => "Pietka", "prenom" => "Cedric", "age" => "4"]);
$enfant7 = new enfant(["Nom" => "Baratto", "prenom" => "Marvine", "age" => "18"]);
$enfant = new enfant(["Nom" => "JeSaisPas", "prenom" => "Ammanda", "age" => "18"]);

//EMPLOYES
$e[] = new Employe(["Nom" => "Aarouss", "Prenom" => "Sofiane", "dateEmbauche" => new DateTime("01-12-2020"), "fonction" => "Eleveur de punaise", "salaireAnnuel" => "14", "Service" => "Nettoyage", "agence" => $a[0], "enfant" => [$enfant1, $enfant2]]);
$e[] = new Employe(["Nom" => "Courquin", "Prenom" => "Pierre", "dateEmbauche" => new DateTime("12-03-2006"), "fonction" => "Gynecologue", "salaireAnnuel" => "40", "Service" => "Medecine", "agence" => $a[1], "enfant" => [$enfant2]]);
$e[] = new Employe(["Nom" => "Rjeb", "Prenom" => "Zied", "dateEmbauche" => new DateTime("15-09-2015"), "fonction" => "Kebabiste", "salaireAnnuel" => "30", "Service" => "Restauration", "agence" => $a[2], "enfant" => [$enfant3]]);
$e[] = new Employe(["Nom" => "Balair", "Prenom" => "Quentin", "dateEmbauche" => new DateTime("03-03-2003"), "fonction" => "Plaquiste", "salaireAnnuel" => "20", "Service" => "batiment", "agence" => $a[2], "enfant" => []]);
$e[] = new Employe(["Nom" => "Cugny", "Prenom" => "Maxime", "dateEmbauche" => new DateTime("27-08-2007"), "fonction" => "Homme de menage", "salaireAnnuel" => "50", "Service" => "Nettoyage", "agence" => $a[1], "enfant" => [$enfant5]]);