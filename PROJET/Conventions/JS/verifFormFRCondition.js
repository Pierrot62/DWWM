/* Variables + listener */

tempsParJour = document.getElementsByClassName("duree");
lesHeures = document.querySelectorAll("input[type=time]");
var moment = ["horaireDebutJour", "horaireDebutDej", "horaireFinDej", "horaireFinJour"];
dureeHebdo = document.getElementById("dureeHebdo");
valider = document.querySelector("button[type= submit]");

for (let i = 0; i < lesHeures.length; i++) {

    lesHeures[i].addEventListener("input", verifCoherence);
    /* si la saisie est le lundi, on déclenche le dupplique */
    if (lesHeures[i].name.substring(lesHeures[i].name.length - 1) == 1) {
        lesHeures[i].addEventListener("input", duppliqueHeure);
    }
}

/* Verifier la cohérence de heures saisies */
function verifCoherence(e) {
    heure = e.target;
    numJour = heure.name.substring(heure.name.length - 1);
    momentJour = heure.name.substring(0, heure.name.length - 1)
    switch (momentJour) {
        case moment[0]: //horaireDebutJour
            horaireDebutDej = document.getElementsByName("horaireDebutDej" + numJour)[0]
            if (heure.value > horaireDebutDej.value) {
                horaireDebutDej.classList.add("rouge")
            } else {
                horaireDebutDej.classList.remove("rouge")
            }
            break;
        case moment[1]: //horaireDebutDej
            horaireDebutJour = document.getElementsByName("horaireDebutJour" + numJour)[0]
            if (heure.value < horaireDebutJour.value) {
                heure.classList.add("rouge")
            } else {
                heure.classList.remove("rouge")
            }
            break;
        case moment[2]: //horaireFinDej
            horaireDebutDej = document.getElementsByName("horaireDebutDej" + numJour)[0]
            if (heure.value < horaireDebutDej.value) {
                heure.classList.add("rouge")
            } else {
                heure.classList.remove("rouge")
            }
            /* ajouter la verif des 3/4 d'heure */
            break;

        case moment[3]: //horaireFinJour
            horaireFinDej = document.getElementsByName("horaireFinDej" + numJour)[0]
            if (heure.value < horaireFinDej.value) {
                heure.classList.add("rouge")
            } else {
                heure.classList.remove("rouge")
            }
            break;
        default:
            ;
    }
    calculDureeJour(e);
}
/* Calcul de la durée par jour */
function calculDureeJour(e) {
    nom = e.target.name
    numJour = nom.substring(nom.length - 1);
    calculDuree(numJour);

}

function calculDuree(numJour) {
    var inputHeure = [];
    var inputErreur = [1, 1, 1, 1];
    for (let i = 0; i < moment.length; i++) {
        inputString = document.getElementsByName(moment[i] + numJour)[0];
        inputHeure[i] = (new Date("2020-01-01T" + inputString.value));

        if (inputString.value == "")
            inputErreur[i] = 0;
        if (inputString.classList.contains("rouge"))
            inputErreur[i] = -1;
    }
    if (inputErreur.indexOf(-1) == -1) // pas d'erreur sur la journée
    {
        matin = 0;
        aprem = 0;
        if (inputErreur[0] == 1 && inputErreur[1] == 1) {
            matin = inputHeure[1] - inputHeure[0];
        }
        if (inputErreur[2] == 1 && inputErreur[3] == 1) {
            aprem = inputHeure[3] - inputHeure[2];
        }
        total = matin + aprem;
        if (total > 0) {
            heure = parseInt(total / 1000 / 60 / 60)
            minute = (total - heure * 60 * 60 * 1000) / 1000 / 60
            heure = heure < 10 ? "0" + heure : heure
            minute = minute < 10 ? "0" + minute : minute

            document.getElementsByName("duree" + numJour)[0].innerHTML = heure + ":" + minute

        }
    } else { //il y a une erreur
        document.getElementsByName("duree" + numJour)[0].innerHTML = "";
    }
    calculSemaine();
}



/* Calcul de la durée hebdomadaire */

function calculSemaine() {
    total = 0
    for (let i = 0; i < tempsParJour.length; i++) {
        if (tempsParJour[i].innerHTML != "") {
            temps = tempsParJour[i].innerHTML.split(":");
            total += parseInt(temps[0] * 60) + parseInt(temps[1]);
        }
    }
    heure = parseInt(total / 60)
    minute = (total - heure * 60)
    heure = heure < 10 ? "0" + heure : heure
    minute = minute < 10 ? "0" + minute : minute
    dureeHebdo.innerHTML = heure + ":" + minute
    if (heure < 35 || heure > 37 || (heure == 37 && minute > 00)) {
        dureeHebdo.classList.add("rouge");
        dureeHebdo.previousElementSibling.classList.add("rouge");
    } else {
        dureeHebdo.classList.remove("rouge");
        dureeHebdo.previousElementSibling.classList.remove("rouge");
    }
}

/* Report des heures sur les autres jours à la saisie du lundi */
function duppliqueHeure(e) {
    source = e.target;
    periode = source.name.substring(0, source.name.length - 1)
    var declencheInput = new Event("input");
    for (let i = 1; i < 6; i++) {
        heure = document.getElementsByName(periode + i)[0]
        if (heure.value == "") {
            heure.value = source.value;
            // on déclenche un event Input sur heure pour décelncher les listener approprié.
            heure.dispatchEvent(declencheInput);
        }
    }
}
/* Check automatique de la checkbox si autre est rempli */
lesTextes = document.querySelectorAll("input[type=text]");
for (let i = 0; i < lesTextes.length; i++) {
    lesTextes[i].addEventListener("input", cocherAutre);
}

function cocherAutre(e) {
    texte = e.target;
    coche = texte.previousElementSibling.previousElementSibling
    if (coche != null) {
        coche.checked = "true";
        coche.dispatchEvent(new Event("click"));
       
    } else {
        radio = texte.previousElementSibling.previousElementSibling
        if (radio != null) radio.checked = "true";
        else {
            radio = texte.parentNode.parentNode.parentNode.querySelector("input[type=radio]");
            radio.checked = "true";
        }
        radio.dispatchEvent(new Event("click"));
    }
    texte.previousElementSibling.classList.remove("rouge");
}
/* Vérifier qu'au moins une checkbox est cochée */
function verifCheck() {
    tabCheck = [];
    lesGroupes = document.querySelectorAll("div[groupe]");
    nbGroupe = document.querySelector("input[preciser=ok]").checked?lesGroupes.length:lesGroupes.length-1;
    for (let i = 0; i < nbGroupe; i++) {
        lesChecks = lesGroupes[i].querySelectorAll("input[type=checkBox]");
        if (lesChecks.length == 0)
            lesChecks = lesGroupes[i].querySelectorAll("input[type=radio]");
        cochee = false;
        for (let j = 0; j < lesChecks.length; j++) {
            if (lesChecks[j].checked)
                cochee = true;
        }
        tabCheck[i] = cochee;
        label = lesGroupes[i].parentNode.getElementsByClassName("label")[0];
        if (!cochee) {
            label.classList.add("rouge");
        } else {
            label.classList.remove("rouge");
        }
    }
    return tabCheck;
}
/* si un checkbox ou un radio est coché, on enleve l'erreur sur le groupe */
lesChecks = document.querySelectorAll("input[type=checkBox]");
for (let i = 0; i < lesChecks.length; i++) {
    lesChecks[i].addEventListener("click", enleveErreurGroupe);
}
lesChecks = document.querySelectorAll("input[type=radio]");
for (let i = 0; i < lesChecks.length; i++) {
    lesChecks[i].addEventListener("click", enleveErreurGroupe);
}

function enleveErreurGroupe(e) {
    input = e.target;
    leGroupe = input.parentNode.parentNode;
    if (leGroupe.getAttribute("groupe") != "ok") leGroupe = input.parentNode.parentNode.parentNode;
    if (leGroupe.getAttribute("groupe") != "ok") leGroupe = input.parentNode.parentNode.parentNode.parentNode;
    label = leGroupe.parentNode.getElementsByClassName("label")[0];
    label.classList.remove("rouge");
}

/* Vérifier que tous les champs sont corrects pour activer le bouton envoyer */
valider.addEventListener("click", verifForm);

function verifForm(e) {
    e.preventDefault();
    valide = true;
    /* On vérifie les horaires */
    if (dureeHebdo.classList.contains("rouge") ) {
        dureeHebdo.previousElementSibling.classList.add("rouge");
        valide = false;
    }
    /* on verifie les groupes */
    var tabCheck = verifCheck();
    if (tabCheck.indexOf(false) >= 0) {
        valide = false;
    }
    /* on vérifie que si autre est coché, la précision est donnée*/
    var lesAutres = document.querySelectorAll("input[autre]");
    var lesInputs = document.querySelectorAll("input[type=text]");
    for (let i = 0; i < lesAutres.length; i++) {
        if (lesAutres[i].checked && lesInputs[i].value=="")
        {
            lesInputs[i].previousElementSibling.classList.add("rouge")
        }
        else{
            lesInputs[i].previousElementSibling.classList.remove("rouge")
        }
    }
    /* on soumet ou pas le formulaire */
    if (valide) {
        document.forms["condition"].submit();
    } 
}

/* Clique sur Label, check la checkbox correspondante */
lesLabels = document.getElementsByTagName("label");
for (let i = 0; i < lesLabels.length; i++) {
    lesLabels[i].addEventListener("click", clickLabel);
}

function clickLabel(e) {
    check = e.target.parentNode.querySelector("input");
    check.checked = !check.checked;
    //declenche l'evenement click de la checkbox
    check.dispatchEvent(new Event("click"));
}

/* demander les precisions sur travaux dangereux */
lesTravaux = document.querySelectorAll("input[preciser]");
for (let i = 0; i < lesTravaux.length; i++) {
    lesTravaux[i].addEventListener("click", cacheTravaux);
}

function cacheTravaux(e) {
    if (e.target.getAttribute("preciser") == "ok") {
        document.querySelector("div[preciser]").classList.remove("cache");
    } else {
        document.querySelector("div[preciser]").classList.add("cache");
    }
}