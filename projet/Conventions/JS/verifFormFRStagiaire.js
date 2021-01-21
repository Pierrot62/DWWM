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
prenomTuteur.addEventListener("keyup", editMdp);
nomTuteur.addEventListener("keyup",verifNomTuteur);
nomTuteur.addEventListener("keyup", editMdp);
emailTuteur.addEventListener("keyup", verifEmailTuteur);


function editMdp() {
    let prenom = prenomTuteur.value;
    let nom = nomTuteur.value;
    mdpTuteur.value = prenom + nom + numBenef.value;
    console.log(mdpTuteur.value);
}

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