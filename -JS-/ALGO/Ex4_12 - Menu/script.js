var choix = parseInt(prompt("1- Multiple\n2- Somme et Moyenne\n3- Recherche du nombre de voyelle\n4- Recherche du nombre de caractere suivants\nEntrez votre option : "));

switch (choix) {
    case 1:

        function table() {
            var nb = parseInt(prompt("nb 1 :"))
            for (i = 1; i <= 10; i++) {
                console.log(nb + " x " + i + " = " + (i * nb));
            }
        }
        console.log(table());

        break
    case 2:

        function somMoy() {
            var nb = parseInt(prompt("Entrez un chiffre : "));
            var somme = 0;
            var moyenne = 0
            for (let i = nb; i > 0; i--) {

                somme = somme + i;
                moyenne = somme / i;

            }
            console.log(moyenne);
            console.log(somme);

        }

        somMoy()

        break
    case 3:

        function nbVoyelle() {
            var text = prompt("Entre du texte : ");
        console.log(text.length);
        nb = text.length;
        lettre = " ";
        cpt = 0;
        for (i = 0; i < nb; i++) {

            lettre = text.substr(i, 1);

            if (lettre == "a" || lettre == "e" || lettre == "i" || lettre == "o" || lettre == "u") {
                cpt++;
            }

        }
        console.log("Il y a " + cpt + " voyelle");
        }
        nbVoyelle()
        break
    default:
        function nbLettre() {
            var text = prompt("Entre du texte : ");
            var lettreRechercher = prompt("Lettre a rechercher : ");
        nb = text.length;
        cpt = 0;
        for (i = 0; i < nb; i++) {

            lettre = text.substr(i, 1);

            if (lettre == lettreRechercher) {
                cpt++;
            }

        }
        console.log("Il y a " + cpt + " "+lettreRechercher);
        }
        nbLettre()
        break
} 
