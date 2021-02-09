var tabErreur = { "prenomStagiaire": 0, "nomStagiaire": 0, " ": 0, "numSecuStagiaire": 0, "numBenefStagiaire": 0, "dateNaissanceStagiaire": 0 };

var listInput = document.getElementsByTagName("input");
var dateDeNaissance = document.getElementById("dateNaissanceStagiaire");

dateDeNaissance.addEventListener("change", verifDdn);
for (let i = 0; i < listInput.length; i++) {
    listInput[i].addEventListener("input", verifInput);

}



//API
//Zone des message d'erreurs
var spanInfo = document.getElementsByClassName("erreur")[0];
var requ = new XMLHttpRequest();
var requ2 = new XMLHttpRequest();

var villeChoisie = "";
var regionHabitation = document.getElementById("regionHabitation");
var villeHabitation = document.getElementById("villeHabitation");
regionHabitation.addEventListener("change", changeRegion);
var regionNaissance = document.getElementById("regionNaissance");
var villeNaissance = document.getElementById("villeNaissance");
var submit = document.querySelector("button[type=submit]");


function afficheMsgErreur(e) {
    spanInfo.textContent = "";
    for (var key in tabErreur) {
        if (tabErreur[key] == -1) {
            spanInfo.innerHTML += document.getElementsByName(key)[0].previousElementSibling.textContent + " invalide <br>";
        }
    }
}
    function boutonSubmit() {

        submit.disabled = false;
        for (let i = 0; i < tabErreur.length; i++) {
            if (tabErreur[i] != 1) {
                submit.disabled = true;
            }
        }
        console.log(tabErreur);
    }


    console.log(spanInfo);

    function verifInput(e) {
        if (e.target.checkValidity()) {
            e.target.classList = ("correct");
            tabErreur[e.target.name] = 1;
        } else {
            e.target.classList = ("incorrect");
            tabErreur[e.target.name] = -1;
        }
        afficheMsgErreur(e)
        boutonSubmit();
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
            dateNaissanceStagiaire.classList = ("incorrect");
            spanInfo[0].textContent =
                "Date de naissance : la date de naissance ne peux pas être supérieur a la date actuelle.";
        } else {
            dateNaissanceStagiaire.classList = ("correct");
            spanInfo[0].textContent = "";
        }
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

    requ.onreadystatechange = function (event) {
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