function getInteger(texte) {
    return entier = parseInt(prompt(texte));
}

function intTab() {
    let taille = getInteger("taille du tableau");
    return tableau = Array(taille);
}

function saisieTab(tableau) {
    let taille = tableau.length;
    for (i = 0; i < taille; i++) {
       tableau[i] = getInteger("Valeur n" + i)
    }
    return tableau
}

function afficheTab(tableau) {
    for (var valeur in tableau) {
        console.log("Valeur : " + tableau[valeur])
    }
}

function rechercheTab(tableau) {
    caseAffiche = getInteger("Case a afficher")
    console.log("Valeur : " + tableau[caseAffiche-1])
}

function infoTab(tableau) {
    let max = Math.max.apply(null, tableau)
    let moy = 0
    let somme = 0
    for (var valeur in tableau) {
        somme += tableau[valeur]
    }
    moy = somme / tableau.length
}

intTab()

saisieTab(tableau)
var choix = parseInt(prompt("1-Affichage du contenu de tous les postes du tableau\nAffichage du contenu d’un poste dont l’index est saisi au clavier\nAffichage du maximum et de la moyenne des postes du tableau\nchoix : "))


switch(choix){

   case 1 : afficheTab(tableau)
    break

    case 2 : rechercheTab(tableau)
    break

    case 3 : infoTab(tableau)
 
}




