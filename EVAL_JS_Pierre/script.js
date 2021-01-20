var capital = document.getElementById("capital");
var taux = document.getElementById("taux");
var duree = document.getElementById("duree");
var mensualite = document.getElementById("mensualite");
var cTT = document.getElementById("cTT");
var calcul = document.getElementById("calcul");
var newCalcul = document.getElementById("newCalcul")

var listInfo = document.getElementsByClassName("info");

capital.addEventListener("keyup", verifCap);
taux.addEventListener("keyup", verifTaux);
duree.addEventListener("keyup", verifDuree);
duree.addEventListener("change", formule);
calcul.addEventListener("click", formule);
newCalcul.addEventListener("click", reset);

//J'ai essayer de faire avec une seule fontion avec .target 
//mais je n'arrive pas a recuperer la div info qui correspond a l'input
function verifCap() {
    if (isNaN(capital.value)) {
        listInfo[0].textContent = "Format Incorrect";
    } else {
        listInfo[0].textContent = "";
    }
}
function verifTaux() {
    if (isNaN(taux.value)) {
        listInfo[1].textContent = "Format Incorrect";
    } else {
        listInfo[1].textContent = "";
    }
}
function verifDuree() {
    if (isNaN(duree.value)) {
        listInfo[2].textContent = "Format Incorrect";
    } else {
        listInfo[2].textContent = "";
    }
}

function formule() {
    var valTaux = taux.value;
    var valCapital = capital.value;
    var valDuree = duree.value
    var nbMois = valDuree * 12;

    //Calcul de la mensualité, donne des valeurs fausse ??
    var valMensualite = (valCapital * valTaux / 12) / (1 - Math.pow(1 + valTaux / 12, -nbMois));
    mensualite.value = valMensualite;
    //Cout Total du credit
    var cout = (valCapital * valTaux) / 100;
    cTT.value = Number(cout) + Number(valCapital);
}

function reset() {
    //REMISE A ZERO DES VALEURS DES IMPUT//
    capital.value = "";
    taux.value = "";
    duree.value = "";
    mensualite.value = "0";
    cTT.value = "0";
    console.log(cTT);
}