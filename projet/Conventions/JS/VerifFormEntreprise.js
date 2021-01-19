// Les Inputs
var siret = document.getElementById("siret");
var raisonSociale = document.getElementById("raisonSociale");
var formeJuridique = document.getElementById("formeJuridique");
var adresse = document.getElementById("adresse");
var represLegal = document.getElementById("representantLegal");
var fonction = document.getElementById("fonction");
var mail = document.getElementById("adresseMail");
var numTel = document.getElementById("numeroTel");
var assureur = document.getElementById("assureur");
var numSocietaire = document.getElementById("numeroSocietaire");
var tuteur = document.getElementById("tuteur");
var fonctionTuteur = document.getElementById("fonctionTuteur");
var numTuteur = document.getElementById("numeroTuteur");
var mailTuteur = document.getElementById("mailTuteur");
var requ = new XMLHttpRequest();

// Liste Inputs
var listeInputs = document.getElementsByTagName("input");

// Valeur Inputs
siret.addEventListener("keyup", verification);
raisonSociale.addEventListener("keyup", verification);
formeJuridique.addEventListener("keyup", verification);
adresse.addEventListener("keyup", verification);
represLegal.addEventListener("keyup", verification);
fonction.addEventListener("keyup", verification);
mail.addEventListener("keyup", verification);
numTel.addEventListener("keyup", verification);
assureur.addEventListener("keyup", verification);
numSocietaire.addEventListener("keyup", verification);
tuteur.addEventListener("keyup", verification);
fonctionTuteur.addEventListener("keyup", verification);
numTuteur.addEventListener("keyup", verification);
mailTuteur.addEventListener("keyup", verification);


function verification(event)
{
    var monInput = event.target;
    var message = (monInput.parentNode).getElementsByClassName("message")[0];

    if(monInput.value == '')
    {
        monInput.style.border = "2px solid orange";
        message.innerHTML = "champ manquant";
    }else if(!monInput.checkValidity())
    {
        message.innerHTML = "format incorrect";
        monInput.style.border = "2px solid red";
    }else{
        message.innerHTML = "";
        monInput.style.border = "1px solid var(--BordureBouton)";
    }
}

var ville = document.getElementById("ville");


var region = document.getElementById("region");
region.addEventListener("change", changeRegion);

requ.onreadystatechange = function (event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            reponse = JSON.parse(this.responseText);
            //on enleve les villes deja presents
            ville.innerHTML = "";
            for (let i = 0; i < reponse.length; i++) { //on traite les éléments de la liste ....
                ajoutVilles(reponse[i].nomVille+'  '+reponse[i].codePostal, reponse[i].idVille);
            }
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

function ajoutVilles(libelleVille, idVille) {

    let uneVille = document.createElement("option");
    uneVille.setAttribute("id", idVille);
    uneVille.innerHTML = libelleVille;
    ville.appendChild(uneVille);
}

/**************************FUNCTIONS **********/
function changeRegion(e) {
    if (region.value != "defaut") // si c'est pas le choix par defaut
    {
        // je lance une requete Ajax
        requ.open('POST', 'index.php?page=VillesAPI', true);
        requ.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        var id = region.value;
        var args = "idRegion=" + id;
        requ.send(args);
    }

}
