function getInteger() {
    var entier = parseInt(prompt("Saisir un nombre :"));
    return entier;
}

function intTab(entier) {
    var tableau = Array(entier);
    return tableau;
}

function saisieTab(entier) {
    for (i = 0; i < entier; i++) {
        tableau[i] = prompt("Valeur n" + i)
    }
    return tableau;
}

function afficheTab(tableau) {
    for (var valeur in tableau) {
        console.log("Valeur : " + tableau[valeur])
    }
}

function rechercheTab(tableau) {
    caseAffiche = parseInt(prompt("Case a afficher"))
    console.log("Valeur : " + tableau[caseAffiche])
}

function infoTab(tableau) {
    let max = Math.max.apply(null, tableau)
    let moy = 0
    let somme
    for (var valeur in tableau) {
        valeurCase = tableau[valeur]
        somme = somme + caleurCase

    }

    moy = somme / tableau.length
}

getInteger()

intTab(entier)

saisieTab(tableau)

afficheTab(tableau)

rechercheTab(tableau)

infoTab(tableau)