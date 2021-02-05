/******************Variables***********************/

//inputs
var radios = document.getElementsByName("genre");
var nom = document.getElementById("nom");
var prenom = document.getElementById("prenom");
var numBenef = document.getElementById("numBenef");
var numSecu = document.getElementById("numSecu");
var ddn = document.getElementById("ddn");
var emailStagiaire = document.getElementById("emailStagiaire");
var numOffreFormation = document.getElementById("numOffreFormation");
var selectFormation = document.getElementById("selectFormation");
var selectSession=document.getElementById("selectSession");
//Liste des inputs
var inputs = document.getElementsByTagName("input");
var req= new XMLHttpRequest();

//Valeur des inputs
nom.addEventListener("input", verification);
prenom.addEventListener("input", verification);
numBenef.addEventListener("input", verification);
numSecu.addEventListener("input", verification);
ddn.addEventListener("change", verification);
emailStagiaire.addEventListener("input", function(){
    emailStagiaire.value = emailStagiaire.value.toLowerCase();
});
emailStagiaire.addEventListener("input", verification);

// numOffreFormation.addEventListener("input", verification);


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

function changeFormation(e)
{
    if(selectFormation.value!="default")
    {
        if (selectFormation.value != "defaut") // si c'est pas le choix par defaut
        {
            req.open('POST', 'index.php?page=SessionAPI', true);
            req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            var id = selectFormation.value;
            var args = "idForm=" + id;
            req.send(args);
        }
    }
}

function ajoutSession(reponse)
{
    selectSession.innerHTML = "";
    if(reponse.length==0)
    {
        let defaut=document.createElement("option");
        defaut.setAttribute("value","default");
        defaut.innerHTML="Acune Session à afficher";
        selectSession.appendChild(defaut);
    }
    else{
        if(reponse.length>1) // Si nombre de sessions>1
        {
            let defaut=document.createElement("option");
            defaut.setAttribute("value","default");
            defaut.innerHTML="Selectionnez une session";
            selectSession.appendChild(defaut);
        }
        for (let i = 0; i < reponse.length; i++) { 
                let session=document.createElement("option");
                session.setAttribute("value",reponse[i].idSessionFormation);
                session.innerHTML=reponse[i].numOffreFormation;
                selectSession.appendChild(session);
        }
    }
}
selectFormation.addEventListener("change",changeFormation);
selectSession.addEventListener("change",function(){
    affichage.innerHTML="";
});




req.onreadystatechange = function (event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            reponse = JSON.parse(this.responseText);
            ajoutSession(reponse)
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};