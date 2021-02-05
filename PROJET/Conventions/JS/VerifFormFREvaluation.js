// Les fonctions
function clickAcquis(e) { // fonction permettant de créer une ligne si l'une des valeurs des inputs radio est renseignés
    var radio = e.target;
    var numLigne = radio.name.substring(13);
    if (numLigne == nbLignes - 1) {
        creerLigne(nbLignes);
    }
}

function validation() { // fonction permettant d'interdir l'envoie des données tant que les champs ne sont pas valide
    valider.disabled = false;
    for (let i = 0; i < listeInputs.length; i++) {
        let input = listeInputs[i];
        if (input.value == "") {
            valider.disabled = true;
        }
    }
}

function verification(event) { // fonction permettant de vérifier la validité des différents champs
    // if (event.target.getAttribute("type") == "text") {
    //     var ligne = event.target.parentNode.parentNode.parentNode; // pour l'input texte
    // } else {
    //     var ligne = event.target.parentNode.parentNode.parentNode.parentNode; // pour le radio bouton
    // }

    var monInput = event.target;
    if (monInput.value == '') {
        monInput.style.border = "2px solid orange";
    } else if (!monInput.checkValidity()) {
        monInput.style.class = "incorrect";
    } else {
        monInput.style.border = "1px solid var(--BordureBouton)";
    }
    validation();
}


function verifRadio(event) {
    verification();
}

function AjoutEvenement() {
    var libAcquis = document.getElementsByClassName("libelle");
    var libRadio = document.getElementsByClassName("radio");
    for (let i = 0; i < libAcquis.length; i++) {
        libAcquis[i].addEventListener("input", verification);
    }

    for (let i = 0; i < libRadio.length; i++) {
        libRadio[i].addEventListener("input", verification);
    }
}

function creerLigne(nb) {

    var divContenu = document.createElement("div");
    row.appendChild(divContenu);

    var divEspace = document.createElement("div");
    divEspace.setAttribute("class", "mini");
    divContenu.appendChild(divEspace);

    // inputs type texte
    var divNeutre = document.createElement("div");
    divNeutre.setAttribute("class", "info colonne");
    divContenu.appendChild(divNeutre);

    var libelleA = document.createElement("div");
    libelleA.setAttribute("class", "blanc centre");
    divNeutre.appendChild(libelleA);

    var libelleAcquis = document.createElement("input");
    libelleAcquis.setAttribute("type", "texte");
    libelleAcquis.setAttribute("class", "libelle");
    libelleAcquis.setAttribute("pattern", "^([0-9a-zA-Z'àâéèêôùûçÀÂÉÈÔÙÛÇ\s-]{1,150})$");
    libelleAcquis.setAttribute("name", "libelleAcquis_" + nb)
    libelleA.appendChild(libelleAcquis);

    AjoutEvenement();

    // inputs type radio
    var divNeutreDeux = document.createElement("div");
    divNeutreDeux.setAttribute("class", "centre double");
    divContenu.appendChild(divNeutreDeux);

    var divOui = document.createElement("div");
    divNeutreDeux.appendChild(divOui);

    var labelOui = document.createElement("label");
    labelOui.textContent = "Oui";
    divOui.appendChild(labelOui);

    var inputOui = document.createElement("input");
    inputOui.setAttribute("type", "radio");
    inputOui.setAttribute("class", "radio");
    inputOui.setAttribute("name", "valeurAcquis_" + nb);
    inputOui.setAttribute("value", 1);
    inputOui.addEventListener("click", clickAcquis);
    divOui.appendChild(inputOui);

    var divNon = document.createElement("div");
    divNeutreDeux.appendChild(divNon);

    var labelNon = document.createElement("label");
    labelNon.textContent = "Non";
    divNon.appendChild(labelNon);

    var inputNon = document.createElement("input");
    inputNon.setAttribute("type", "radio");
    inputNon.setAttribute("class", "radio");
    inputNon.setAttribute("name", "valeurAcquis_" + nb);
    inputNon.setAttribute("value", 2);
    inputNon.addEventListener("click", clickAcquis);
    divNon.appendChild(inputNon);

    var divADev = document.createElement("div");
    divNeutreDeux.appendChild(divADev);

    var labelADev = document.createElement("label");
    labelADev.textContent = "A développer";
    divADev.appendChild(labelADev);

    var inputADev = document.createElement("input");
    inputADev.setAttribute("type", "radio");
    inputADev.setAttribute("class", "radio");
    inputADev.setAttribute("name", "valeurAcquis_" + nb);
    inputADev.setAttribute("value", 3);
    inputADev.addEventListener("click", clickAcquis);
    divADev.appendChild(inputADev);

    var divObserve = document.createElement("div");
    divNeutreDeux.appendChild(divObserve);

    var labelObserve = document.createElement("label");
    labelObserve.textContent = "N'a pas pu être observé";
    divObserve.classList.add("double");
    divObserve.appendChild(labelObserve);

    var inputObserve = document.createElement("input");
    inputObserve.setAttribute("type", "radio");
    inputObserve.setAttribute("class", "radio");
    inputObserve.setAttribute("name", "valeurAcquis_" + nb);
    inputObserve.setAttribute("value", 4);
    inputObserve.addEventListener("click", clickAcquis);
    divObserve.appendChild(inputObserve);

    var divEspace = document.createElement("div");
    divEspace.setAttribute("class", "mini");
    divContenu.appendChild(divEspace);

    nbLignes++;
}

// Les Inputs
var ponctualite = document.getElementById("ponctualite");
var presentation = document.getElementById("presentation");
var adaptation = document.getElementById("adaptation");
var relationPro = document.getElementById("relationPro");
var communication = document.getElementById("commuication");
var tacheAutonome = document.getElementById("tacheAutonome");
var respectConsigne = document.getElementById("respectConsigne");
var respectMateriel = document.getElementById("respectMateriel");
var agir = document.getElementById("agir");
var respectCritere = document.getElementById("respectCritere");
var respectHygiene = document.getElementById("respectHygiene");
var row = document.getElementById("test");
var valider = document.getElementById("valide");
var nbLignes = 1;

var listeInputs = document.getElementsByTagName("input");

creerLigne(nbLignes); // permet de creer une ligne au moins une fois