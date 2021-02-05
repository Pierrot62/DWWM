//VARIBLE
//Input
var prenom = document.getElementById("prenomStagiaire");
var nom = document.getElementById("nomStagiaire");
var radios = document.getElementsByName('genreStagiaire');
var numSecu = document.getElementById("numSecuStagiaire");
var genre = document.getElementById("genreStagiaire");
var numBenef = document.getElementById("numBenefStagiaire");
var ddn = document.getElementById("dateNaissanceStagiaire");
var prenomTuteur = document.getElementById("prenomTuteur");
var nomTuteur = document.getElementById("nomTuteur");
var emailTuteur = document.getElementById("emailTuteur");
var emailUser = document.getElementById("emailUser");
var mdpTuteur = document.getElementById("mdpUtilisateur");
//Liste des inputs
var listInput = document.getElementsByTagName("input");
console.log(listInput);
//Zone des message d'erreurs
var spanInfo = document.getElementsByClassName("erreur");
//VALEUR DES INPUTS
prenom.addEventListener("keyup", verifPrenom);
nom.addEventListener("keyup", verifNom);
numSecu.addEventListener("keyup", verifNumSecu);
numBenef.addEventListener("keyup", verifNumBenef);
ddn.addEventListener("change", verifDdn);
prenomTuteur.addEventListener("keyup", verifPrenomTuteur);
nomTuteur.addEventListener("keyup",verifNomTuteur);
emailTuteur.addEventListener("keyup", verifEmailTuteur);
var requ = new XMLHttpRequest();
var requ2 = new XMLHttpRequest();

var villeChoisie = "";
var regionHabitation = document.getElementById("regionHabitation");
var villeHabitation = document.getElementById("villeHabitation");
regionHabitation.addEventListener("change", changeRegion);

var regionNaissance = document.getElementById("regionNaissance");
var villeNaissance = document.getElementById("villeNaissance");
regionNaissance.addEventListener("change", changeRegion2);


console.log(spanInfo);

function verifPrenom() {
    if (listInput[0].checkValidity()) {
        prenomStagiaire.style.border = "1px solid var(--BordureBouton)";
        spanInfo[0].textContent = "";
    } else {
        prenomStagiaire.style.border = "3px solid red";
        spanInfo[0].textContent = "Prenom incorrect";
    }
}

function verifPrenomTuteur() {
    if (listInput[7].checkValidity()) {
        prenomTuteur.style.border = "1px solid var(--BordureBouton)";
        spanInfo[0].textContent = "";
    } else {
        prenomTuteur.style.border = "3px solid red";
        spanInfo[0].textContent = "Prenom du tuteur incorrect";
    }
}

function verifNom() {
    if (listInput[1].checkValidity()) {
        nomStagiaire.style.border = "1px solid var(--BordureBouton)";
        spanInfo[0].textContent = "";
    } else {
        nomStagiaire.style.border = "3px solid red";
        spanInfo[0].textContent = "Nom incorrect";
    }
}

function verifNomTuteur() {
    if (listInput[8].checkValidity()) {
        nomTuteur.style.border = "1px solid var(--BordureBouton)";
        spanInfo[0].textContent = "";
    } else {
        nomTuteur.style.border = "3px solid red";
        spanInfo[0].textContent = "Nom incorrect";
    }
}

function verifDdn() {
    //Decoupage puis création d'un OBJ DATE avec la ddn du stagiaire
    let dateUser = dateNaissanceStagiaire.value;
    let jour = parseInt(dateUser.substring(8, 10));
    let mois = parseInt(dateUser.substring(5, 7));
    var annee = parseInt(dateUser.substring(0, 4));
    let date = new Date(annee, mois - 1, jour);
    let dateSysteme = new Date();

    if (date > dateSysteme) {
        dateNaissanceStagiaire.style.border = "3px solid red";
        spanInfo[0].textContent =
            "Erreur : la date de naissance ne peux pas être supérieur a la date actuelle.";
    } else {
        dateNaissanceStagiaire.style.border = "1px solid var(--BordureBouton)";
        spanInfo[0].textContent = "";
    }

    // verifNumSecu(annee);
    
}


function verifNumSecu() {
    let content = numSecuStagiaire.value;
    if (listInput[4].checkValidity()) {
        numSecuStagiaire.style.border = "1px solid var(--BordureBouton)";
        spanInfo[0].textContent = "";
    } else if (content.length < 13) {
        numSecuStagiaire.style.border = "3px solid orange";
        spanInfo[0].textContent = "";
    } else if (content.length > 13) {
        numSecuStagiaire.style.border = "3px solid red";
        spanInfo[0].textContent = "Numéro incorrect";
    }
    //Recuperation du premier chiffre du num de secu
    let num = content.substring(0, 1);
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            valeur = radios[i].value;
        }
    }
    //Verif si le premier chiffre du num de secu correspond au genre de la personne 
    // 1 = HOMME && 2 = FEMME
    if (num == 2 && valeur == "F" || num == 1 && valeur == "H" || num == "") {
        spanInfo[0].textContent = "";
    } else {
        numSecu.style.border = "3px solid red";
        spanInfo[0].textContent = "Votre numéro de sécurité sociale ne correspond pas à votre genre."
    }
    // var anneeStr = annee.toString();
    // var anneeSecu = anneeStr.slice(2,4);
    
}

function verifNumBenef() {
    let content = numBenefStagiaire.value;
    if (listInput[5].checkValidity()) {
        numBenefStagiaire.style.border = "1px solid var(--BordureBouton)";
        spanInfo[0].textContent = "";
    } else if (content.length < 8) {
        numBenefStagiaire.style.border = "3px solid orange";
        spanInfo[0].textContent = "";
    } else if (content.length > 8) {
        numBenefStagiaire.style.border = "3px solid red";
        spanInfo[0].textContent = "Format numéro de bénéficiaire incorrect";
    }
    
}

function verifEmailTuteur() {
    // console.log(checkInput[6].value);
    if (listInput[9].checkValidity()) {
        emailTuteur.style.border = "1px solid var(--BordureBouton)";
        spanInfo[0].textContent = "";
      } else {
        emailTuteur.style.border = "5px solid red";
        spanInfo[0].textContent = "Format d'e-mail incorrect";
      }
}


function ajoutVilles(libelleVille, idVille) { // fonction permettant de selectionner les villes en fonction de la région ou du département

    let uneVille = document.createElement("option");
    uneVille.setAttribute("id", idVille);
    uneVille.value = idVille;
    uneVille.innerHTML = libelleVille;
    villeHabitation.appendChild(uneVille);
}

function changeRegion(e) { // 
    if (regionHabitation.value != "defaut") // si c'est pas le choix par defaut
    {
        // je lance une requete Ajax
        requ.open('POST', 'index.php?page=VillesAPI', true);
        requ.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        var id = regionHabitation.value;
        var args = "idRegion=" + id + '&type=' + regionHabitation.selectedOptions[0].getAttribute("type");
        requ.send(args);
    }
}

requ.onreadystatechange = function(event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            reponse = JSON.parse(this.responseText);
            //on enleve les villes deja presents
            villeHabitation.innerHTML = "";
            for (let i = 0; i < reponse.length; i++) { //on traite les éléments de la liste ....
                ajoutVilles(reponse[i].nomVille + '  ' + reponse[i].codePostal, reponse[i].idVille);
            }
            if (villeChoisie != "") {
                villeHabitation.value = villeChoisie;
            }
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};




function ajoutVilles2(libelleVille, idVille) { // fonction permettant de selectionner les villes en fonction de la région ou du département

    let uneVille = document.createElement("option");
    uneVille.setAttribute("id", idVille);
    uneVille.value = idVille;
    uneVille.innerHTML = libelleVille;
    villeNaissance.appendChild(uneVille);
}

function changeRegion2(e) { // 
    if (regionNaissance.value != "defaut") // si c'est pas le choix par defaut
    {
        // je lance une requete Ajax
        requ2.open('POST', 'index.php?page=VillesAPI', true);
        requ2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        var id = regionNaissance.value;
        var args = "idRegion=" + id + '&type=' + regionNaissance.selectedOptions[0].getAttribute("type");
        requ2.send(args);
    }
}

requ2.onreadystatechange = function(event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            reponse = JSON.parse(this.responseText);
            //on enleve les villes deja presents
            villeNaissance.innerHTML = "";
            for (let i = 0; i < reponse.length; i++) { //on traite les éléments de la liste ....
                ajoutVilles2(reponse[i].nomVille + '  ' + reponse[i].codePostal, reponse[i].idVille);
            }
            if (villeChoisie != "") {
                villeNaissance.value = villeChoisie;
            }
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};