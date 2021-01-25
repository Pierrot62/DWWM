function validation() { // fonction permettant d'intrdir l'envoie des données tant queles champs ne sont pas valide
    valider.disabled = false;
    for (let i = 0; i < listeInputs.length; i++) {
        let input = listeInputs[i];
        if (input.value == "") {
            valider.disabled = true;
        }
    }
}

function verification(event) { // fonction permettant de vérifier la validité des différents champs
    var monInput = event.target;
    var message = (monInput.parentNode).getElementsByClassName("message")[0];

    if (monInput.value == '') {
        monInput.style.border = "2px solid orange";
        message.innerHTML = "champ manquant";
    } else if (!monInput.checkValidity()) {
        message.innerHTML = "format incorrect";
        monInput.style.class = "incorrect";
    } else {
        message.innerHTML = "";
        monInput.style.border = "1px solid var(--BordureBouton)";
    }

    validation();
}
function minuscule(e)
{
    e.target.value = Lowercase(e.target.value);
}
function ajoutVilles(libelleVille, idVille) { // fonction permettant de selectionner les villes en fonction de la région ou du département

    let uneVille = document.createElement("option");
    uneVille.setAttribute("id", idVille);
    uneVille.value = idVille;
    uneVille.innerHTML = libelleVille;
    ville.appendChild(uneVille);
}

function changeRegion(e) { // 
    if (region.value != "defaut") // si c'est pas le choix par defaut
    {
        // je lance une requete Ajax
        requ.open('POST', 'index.php?page=VillesAPI', true);
        requ.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        var id = region.value;
        var args = "idRegion=" + id + '&type=' + region.selectedOptions[0].getAttribute("type");
        requ.send(args);
    }
}

function rechercheEntreprise(event) { // fonction permettant de rechercher le numéro de siret de l'entreprise 
    var siretValue = siret.value;
    requ1.open('POST', 'index.php?page=SiretAPI', true);
    requ1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var args = "numeroSiret=" + siretValue;
    requ1.send(args);
}

function afficheInputs() { // fonction permettant de ne pas afficher les inputs tant que le champ Numero Siret est vide
    var resultatSiret = siret.value;
    if (resultatSiret == "") {
        document.getElementById("test").style.display = "none";
    } else {
        document.getElementById("test").style.display = "flex";
    }
}


// Les Inputs
var siret = document.getElementById("siret");
var raisonSociale = document.getElementById("raisonSociale");
var formeJuridique = document.getElementById("formeJuridique");
var adresseEntreprise = document.getElementById("adresseEntreprise");
var regions = document.getElementById("region");
var ville = document.getElementById("ville");
var numTelEnt = document.getElementById("numeroTelEnt");
var numSocietaire = document.getElementById("numeroSocietaire");
var assureur = document.getElementById("assureur");
var nomRepres = document.getElementById("nomRepresentant");
var prenomRepres = document.getElementById("prenomRepresentant");
var fonctionRepres = document.getElementById("fonctionRepresentant");
var mailRepres = document.getElementById("adresseMailRepresentant");
var numTelRepres = document.getElementById("numeroTelRepresentant");
var test = document.getElementsByClassName("test");
var nomTuteur = document.getElementById("nomTuteur");
var prenomTuteur = document.getElementById("prenomTuteur");
var fonctionTuteur = document.getElementById("fonctionTuteur");
var numTuteur = document.getElementById("numeroTuteur");
var mailTuteur = document.getElementById("mailTuteur");

var villeChoisie = "";
var ville = document.getElementById("ville");
var region = document.getElementById("region");
region.addEventListener("change", changeRegion);

var valider = document.getElementById("valide");
var requ = new XMLHttpRequest();
var requ1 = new XMLHttpRequest();

// Liste Inputs
var listeInputs = document.getElementsByTagName("input");

// Valeur Inputs
siret.addEventListener("input", verification);
siret.addEventListener("input", rechercheEntreprise);
window.addEventListener("load", afficheInputs);
siret.addEventListener("input", afficheInputs);
raisonSociale.addEventListener("input", verification);
formeJuridique.addEventListener("input", verification);
adresseEntreprise.addEventListener("input", verification);
numTelEnt.addEventListener("input", verification);
numSocietaire.addEventListener("input", verification);
assureur.addEventListener("input", verification);
nomRepres.addEventListener("input", verification);
prenomRepres.addEventListener("input", verification);
fonctionRepres.addEventListener("input", verification);
mailRepres.addEventListener("input", verification);
mailRepres.addEventListener("input", minuscule);
numTelRepres.addEventListener("input", verification);

nomTuteur.addEventListener("input", verification);
prenomTuteur.addEventListener("input", verification);
fonctionTuteur.addEventListener("input", verification);
numTuteur.addEventListener("input", verification);
mailTuteur.addEventListener("input", verification);
mailTuteur.addEventListener("input", minuscule);

requ.onreadystatechange = function(event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            reponse = JSON.parse(this.responseText);
            //on enleve les villes deja presents
            ville.innerHTML = "";
            for (let i = 0; i < reponse.length; i++) { //on traite les éléments de la liste ....
                ajoutVilles(reponse[i].nomVille + '  ' + reponse[i].codePostal, reponse[i].idVille);
            }
            if (villeChoisie != "") {
                ville.value = villeChoisie;
            }
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

requ1.onreadystatechange = function(event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            reponse1 = JSON.parse(this.responseText)["entreprise"];
            reponse2 = JSON.parse(this.responseText)["ville"];
            document.getElementById("region").value = reponse2.idDepartement;
            changeRegion();
            console.log(reponse1);
            document.getElementById("raisonSociale").value = reponse1.raisonSociale;
            document.getElementById("formeJuridique").value = reponse1.statutJuridiqueEnt;
            document.getElementById("adresseEntreprise").value = reponse1.adresseEnt;
            document.getElementById("numeroTelEnt").value = reponse1.telEnt;
            document.getElementById("numeroSocietaire").value = reponse1.numSocietaire;
            villeChoisie = reponse1.idVille;
            document.getElementById("assureur").value = reponse1.assureurEnt;
            document.getElementById("nomRepresentant").value = reponse1.nomRepresentant;
            document.getElementById("prenomRepresentant").value = reponse1.prenomRepresentant;
            document.getElementById("fonctionRepresentant").value = reponse1.fctRepresentant;
            document.getElementById("adresseMailRepresentant").value = reponse1.mailRepresentant;
            document.getElementById("numeroTelRepresentant").value = reponse1.telRepresentant;
            //on traite les éléments de la liste ....
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};