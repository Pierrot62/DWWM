var valeurButton = document.getElementsByTagName("button");

for (let i = 0; i < valeurButton.length; i++) {
    valeurButton[i].addEventListener("click", clickBouton);
}

var afficheur = document.getElementById("resultat");

function clickBouton(e) {
    var boutonCliquer = e.target;
    var valeur = boutonCliquer.textContent;
    if (valeur == "=") {
        afficheur.textContent = eval(afficheur.textContent);
    } else if (valeur == "Effacer") {
        afficheur.textContent = "";
    } else if (valeur == "Supprimer") {
        ecran = afficheur.textContent;
        afficheur.textContent = ecran.substring(0, ecran.length - 1);
    } else {
        afficheur.textContent += valeur;
    }
}