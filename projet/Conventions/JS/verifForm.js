//VARIBLE
//Input
var prenom = document.getElementById("prenom");
var nom = document.getElementById("nom");
var radios = document.getElementsByName('genre');
var numSecu = document.getElementById("numSecu");
var genre = document.getElementById("genre");
var numBenef = document.getElementById("numBenef");
var ddn = document.getElementById("ddn");
var emailTuteur = document.getElementById("emailTuteur");
//Liste des inputs
var listInput = document.getElementsByTagName("input");
//Zone des message d'erreurs
var spanInfo = document.getElementsByClassName("erreur");
//VALEUR DES INPUTS
prenom.addEventListener("keyup", verifPrenom);
nom.addEventListener("keyup", verifNom);
numSecu.addEventListener("keyup", verifNumSecu);
numBenef.addEventListener("keyup", verifNumBenef);
ddn.addEventListener("change", verifDdn);
emailTuteur.addEventListener("keyup", verifEmailTuteur);

console.log(spanInfo);



function verifPrenom() {
    if (listInput[0].checkValidity()) {
        prenom.style.border = "1px solid var(--BordureBouton)";
        spanInfo[0].textContent = "";
    } else {
        prenom.style.border = "3px solid red";
        spanInfo[0].textContent = "Prenom incorrect";
    }
}

function verifNom() {
    if (listInput[1].checkValidity()) {
        nom.style.border = "1px solid var(--BordureBouton)";
        spanInfo[0].textContent = "";
    } else {
        nom.style.border = "3px solid red";
        spanInfo[0].textContent = "Nom incorrect";
    }
    
}

function verifDdn() {
    //Decoupage puis création d'un OBJ DATE avec la ddn du stagiaire
    let dateUser = ddn.value;
    let jour = parseInt(dateUser.substring(8, 10));
    let mois = parseInt(dateUser.substring(5, 7));
    var annee = parseInt(dateUser.substring(0, 4));
    let date = new Date(annee, mois - 1, jour);
    let dateSysteme = new Date();

    if (date > dateSysteme) {
        ddn.style.border = "3px solid red";
        spanInfo[0].textContent =
            "Erreur : la date de naissance ne peux pas être supérieur a la date actuelle.";
    } else {
        ddn.style.border = "1px solid var(--BordureBouton)";
        spanInfo[0].textContent = "";
    }

    // verifNumSecu(annee);
    
}


function verifNumSecu() {
    let content = numSecu.value;
    if (listInput[4].checkValidity()) {
        numSecu.style.border = "1px solid var(--BordureBouton)";
        spanInfo[0].textContent = "";
    } else if (content.length < 13) {
        numSecu.style.border = "3px solid orange";
        spanInfo[0].textContent = "";
    } else if (content.length > 13) {
        numSecu.style.border = "3px solid red";
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
    let content = numBenef.value;
    if (listInput[5].checkValidity()) {
        numBenef.style.border = "1px solid var(--BordureBouton)";
        spanInfo[0].textContent = "";
    } else if (content.length < 8) {
        numBenef.style.border = "3px solid orange";
        spanInfo[0].textContent = "";
    } else if (content.length > 8) {
        numBenef.style.border = "3px solid red";
        spanInfo[0].textContent = "Format numéro de bénéficiaire incorrect";
    }
    
}

function verifEmailTuteur() {
    // console.log(checkInput[6].value);
    if (listInput[7].checkValidity()) {
        emailTuteur.style.border = "1px solid var(--BordureBouton)";
        spanInfo[0].textContent = "";
      } else {
        emailTuteur.style.border = "5px solid red";
        spanInfo[0].textContent = "Format d'e-mail incorrect";
      }
      
}