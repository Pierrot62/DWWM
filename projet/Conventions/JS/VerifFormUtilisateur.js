//VARIBLE
//Input
var prenom = document.getElementById("prenom");
var nom = document.getElementById("nom");
var email = document.getElementById("email");
var mdp = document.getElementById("mdp");
var confirmation = document.getElementById('confirmation');
var datePeremtion = document.getElementById("datePeremtion");
var role = document.getElementById("role");
var submit=document.getElementById("submit");
var tabErreur=[0,0,0,0,0,0,0];
var tabMsgErreur=["Prenom Invalide ","Nom Invalide ","Adresse E-mail Invalide ","Mot de passe Invalide ","Confirmation Mot de passe Invalide ","Date de peremption Invalide ","Role Invalide "]



//Liste des inputs
var listInput = document.getElementsByTagName("input");

// //Ajoute la vérification de validité au changement de chaque champ
// for (let i = 0; i < listInput.length; i++) {
//     listInput[i].addEventListener("input", function (event) {
//         updateValidity(event.target);
//     });
// }


//Zone des message d'erreurs
var spanInfo = document.getElementsByClassName("erreur")[0];
//VALEUR DES INPUTS
prenom.addEventListener("keyup", verifPrenom);
nom.addEventListener("keyup", verifNom);
email.addEventListener("keyup", verifEmail);

// affichage de l'aide à la saisie du mot de passe 
// c'est la 2eme fois que l'on pose un listener sur input de mot de passe, les 2 fonctions vont s'executer l'une derrière l'autre 
mdp.addEventListener("input", function (event) {
    let aideMdp = document.getElementsByClassName("aideMdp")[0];
    aideMdp.style.display = "flex";
    let lesImages = aideMdp.getElementsByTagName("i");
    let lesCheck = ["([a-zA-Z0-9!@#\$%\^&\*+]{8,})", "(?=.*[A-Z])", "(?=.*[a-z])", "(?=.*[0-9])", "(?=.*[!@#\$%\^&\*+])"];
    for (let i = 0; i < lesCheck.length; i++) {
        if (RegExp(lesCheck[i]).test(mdp.value)) {
            //la condition est vérifiée, on met la coche verte correspondente
            lesImages[i].classList = "far fa-check-circle vert";
            tabErreur[3]=1;
        } else {
            lesImages[i].classList = "far fa-times-circle rouge";
            tabErreur[3]=-1;
        }
    }
})
mdp.addEventListener("blur", function (event) {
    document.getElementsByClassName("aideMdp")[0].style.display = "none";
})

//gestion particulière de la confirmation de mot de passe
confirmation.addEventListener("input", function (event) {
    if (confirmation.value == mdp.value) {
        confirmation.classList = ("vrai");
        tabErreur[4]=1;
    } else {
        confirmation.classList = ("faux");
        tabErreur[4]=-1;
    }
})
//empecher le copier dans la zone mdp et confirm
mdp.addEventListener("contextmenu", annule);
confirmation.addEventListener("contextmenu", annule);
//empecher le coller dans la confirmation
confirmation.addEventListener("paste", annule);
//gestion de l'oeil dans le mot de passe
var oeil = document.getElementsByClassName("oeil")[0];
// on affiche un petit oeil qui permet de voir de mot de passe 
oeil.addEventListener("mousedown", function () {
    affichePassWord(true);
});
oeil.addEventListener("mouseup", function () {
    affichePassWord(false);
});



datePeremtion.addEventListener("change", verifDdP);
role.addEventListener("change", verifRole);




function verifPrenom() {
    //mettre la premiere lettre en MAJUSCULES 
    prenom.value=(prenom.value.charAt(0).toUpperCase() + prenom.value.substring(1).toLowerCase())
    if (listInput[0].checkValidity()) {
        prenom.classList = ("vrai");
        tabErreur[0]=1;
    } else {
        prenom.classList = ("faux");
        tabErreur[0]=-1;
    }
    afficheMsgErreur()
}

function verifNom() {
    //mettre tout le nom en MAJUSCULES 
    nom.value=nom.value.toUpperCase();
    if (listInput[1].checkValidity()) {
        nom.classList = ("vrai");
        tabErreur[1]=1;
    } else {
        nom.classList = ("faux");
        tabErreur[1]=-1;
    }
    afficheMsgErreur()
}

function verifDdP() {
    //Decoupage puis création d'un OBJ DATE avec la ddp de l'utilisateur
    let dateUser = datePeremtion.value;
    let jour = parseInt(dateUser.substring(8, 10));
    let mois = parseInt(dateUser.substring(5, 7));
    var annee = parseInt(dateUser.substring(0, 4));
    let date = new Date(annee, mois - 1, jour);
    let dateSysteme = new Date();

    if (date < dateSysteme) {
        datePeremtion.classList = ("faux");
        tabErreur[5]=1;
    } else {
        datePeremtion.classList = ("vrai");
        tabErreur[5]=-1;
    }
    afficheMsgErreur()

}

function verifRole() {
    let content = role.value;
    console.log(content);
    if (content=="defaut") {
        tabErreur[6]=1;
        // submit.disabled = true;
    }else {
        tabErreur[6]=-1;
        // submit.disabled = false;
    }
    afficheMsgErreur()

}

function verifEmail() {
    // console.log(checkInput[6].value);
    if (listInput[2].checkValidity()) {
        email.classList = ("vrai");
        tabErreur[2]=1;
    } else {
        email.classList = ("faux");
        tabErreur[2]=-1;
    }
    afficheMsgErreur()

}

function annule(event) {
    event.preventDefault(); //annule la fonction standard associée à la frappe ou au clic
    return false;
}
/**
 * Change le type de l'input mot de passe
 * @param {boolean} flag 
 */
function affichePassWord(flag) {
    if (flag) mdp.type = "text";
    else mdp.type = "password";
}

function afficheMsgErreur(){
    spanInfo.textContent="";
    for (let i = 0; i < tabErreur.length; i++) {
       if (tabErreur[i]==-1) {
        spanInfo.innerHTML += tabMsgErreur[i]+ "<br>";
       }
    //    else if () {
           
    //    }
        
    }
}

/**
 * Activation du bouton de formulaire
 * Vérification de tous les champs
 */
function checkAllValidity() {
    var pasErreur = true;
    i = 0;
    // on vérifie les inputs un à un
    while (pasErreur && i < listInput.length) {
        pasErreur = validateInput(listInput[i])
        i++;
    }
    if (pasErreur) {
        submit.disabled = false;
        submit.style.color = "white";
        submit.style.borderBottom = "4px solid white";
    } else {
        submit.disabled = true;
        submit.style.color = "#666666";
        submit.style.borderBottom = "4px solid #666666";
    }
}