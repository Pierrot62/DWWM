var valeurButton = document.getElementsByTagName("button");

for (let i = 0; i < valeurButton.length; i++) {
    valeurButton[i].addEventListener("click", clickBouton);
}

var afficheur = document.getElementById("resultat");

function clickBouton(e) {
    var boutonCliquer = e.target;
    var valeur = boutonCliquer.textContent;
    if (valeur == "-") {
        afficheur.textContent = eval(affiche.textContent);
    } else if (valeur == "clear") {
        afficheur.textContent = eval(afficheur.textContent);
    } else if (valeur == "supprimer") {
        afficheur = afficheur.textContent;
        afficheur.textContent = afficheur.substring(0, afficheur.length - 1);
    } else {
        afficheur.textContent += valeur;
    }
}