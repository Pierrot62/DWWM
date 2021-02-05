function verification() {
    let message = (numOffre.parentNode.parentNode).getElementsByClassName("erreur")[0];
    if (numOffre.value == '') {
        message.style.display = 'block';
        message.innerHTML = "champ manquant";
        val[0] = 0;
    } else if (!numOffre.checkValidity()) {
        numOffre.classList.add("incorrect");
        message.style.display = 'block';
        message.innerHTML = "format incorrect";
        val[0] = 0;
    } else {
        message.innerHTML = "";
        numOffre.classList.remove("incorrect");
        numOffre.classList.add("correct");
        message.style.display = 'block';
        val[0] = 1;
    }
    validerForm();
}

function changeValeur() {
    choix = select.selectedIndex;
    valeur = select.options[choix].value;
    if (valeur === 'defaut') {
        val[1] = 0;
        select.classList.add("incorrect");
    } else {
        val[1] = 1;
        select.classList.remove("incorrect");
        select.classList.add("correct");
    }
    validerForm();
}

function validerForm() {
    valider.disabled = true
    if (val[0] == 1 && val[1] == 1) {
        valide = true;
        valider.disabled = false;

    }

}

function verifDateFinPAE(e) { // cette fonction verifie que la date de fin n est pas superieure a la date de debut
    let dateFin = e.target;
    let dateDebut = dateFin.parentNode.parentNode.getElementsByClassName('dateDebutPAE')[0];
    let message = (dateFin.parentNode).getElementsByClassName("erreur")[0];
    message.style.display = 'block';

    if (dateFin.value < dateDebut.value) {
        message.innerHTML = "date incorrecte";
        dateFin.style.border = "2px solid red";
    } else {
        message.innerHTML = "";
        dateFin.style.border = "2px solid green";
        message.style.display = 'block';
    }
}
function verifDateFin(e) { // cette fonction verifie que la date de fin n est pas superieure a la date de debut
    let dateFin = e.target;
    let dateDebut = document.getElementsByName('dateDebut')[0];
    let message = (dateFin.parentNode).getElementsByClassName("erreur")[0];
    message.style.display = 'block';

    if (dateFin.value < dateDebut.value) {
        message.innerHTML = "date incorrecte";
        dateFin.style.border = "2px solid red";
    } else {
        message.innerHTML = "";
        dateFin.style.border = "2px solid green";
        message.style.display = 'block';
    }
}

function verifDateRapport(e) {
    let dateRapport = e.target;
    let dateFin = dateRapport.parentNode.parentNode.children[0].children[3].children[1];
    let message = (dateRapport.parentNode).getElementsByClassName("erreur")[0];
    if (dateFin.value < dateRapport.value) {
        message.innerHTML = "date incorrecte";
        message.style.display = 'block';
        dateRapport.style.border = "2px solid red";
    } else {
        message.innerHTML = "";
        dateRapport.style.border = "2px solid green";
        message.style.display = 'block';
    }
}

var ajoutP = document.querySelector('#ajout1p');
if (ajoutP != null) {
    ajoutP.addEventListener('click', function () {
        var form = document.querySelector('form');

        form.action += '&perSup=ok'
    });
}

var val = [];
var select = document.getElementById("select");

select.addEventListener('input', changeValeur);
var numOffre = document.querySelector('#numOffreFormation');

numOffre.addEventListener('input', verification);
var valider = document.getElementById('valide');
var url = document.location.href;
if (url.indexOf("modif") != -1) {

    changeValeur();
    verification();
}

var listeDateFin = document.getElementsByClassName('dateFinPAE');

for (let i = 0; i < listeDateFin.length; i++) {
    listeDateFin[i].addEventListener('input', verifDateFinPAE);
}

var listeDateRapport = document.getElementsByClassName('dateRapportSuivi');

for (let i = 0; i < listeDateRapport.length; i++) {
    listeDateRapport[i].addEventListener('input', verifDateRapport);
}
var dateFinFormation = document.getElementsByName("dateFin");
dateFinFormation[0].addEventListener("input",verifDateFin);