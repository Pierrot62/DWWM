/******************Variables***********************/

//inputs
var radios = document.getElementsByName("genre");
var nom = document.getElementById("nom");
var prenom = document.getElementById("prenom");
var numBenef = document.getElementById("numBenef");
var numSecu = document.getElementById("numSecu");
var ddn = document.getElementById("ddn");
var emailStagiaire = document.getElementById("emailStagiaire");

//Liste des inputs
var inputs = document.getElementsByTagName("input");

//Valeur des inputs
nom.addEventListener("keyup", verification);
prenom.addEventListener("keyup", verification);
numBenef.addEventListener("keyup", verification);
numSecu.addEventListener("keyup", verification);
ddn.addEventListener("change", verification);
emailStagiaire.addEventListener("keyup", verification);


/*******************Fonctions**********************/

function verification(event) {
    var monInput = event.target;
    var erreur = (monInput.parentNode).getElementsByClassName("erreur")[0];

    if (monInput.value == '') {
        monInput.style.border = "2px solid orange";
        erreur.innerHTML = "champ manquant";
    } else if (!monInput.checkValidity()) {
        erreur.innerHTML = "format incorrect";
        monInput.style.class = "incorrect";
    } else {
        erreur.innerHTML = "";
        monInput.style.border = "1px solid var(--BordureBouton)";
    }
}
