const requ=new XMLHttpRequest();
const requ1=new XMLHttpRequest();
const requ2=new XMLHttpRequest();
const requ3=new XMLHttpRequest();
const requ4=new XMLHttpRequest();

var selectFormation=document.getElementById("selectFormation");
var selectSession=document.getElementById("selectSession");
var btnListe=document.getElementById("liste");
var btnObjectif=document.getElementById("objectif");
var affichage=document.getElementById("affichage");
var selectValue=selectFormation.value;

/*****************LISTENER ******************/
selectFormation.addEventListener("change",changeFormation);
btnListe.addEventListener("click",affichageListe);
btnObjectif.addEventListener("click",affichageObjectif);
selectSession.addEventListener("change",function(){
    affichage.innerHTML="";
});

requ.onreadystatechange = function (event) {
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

requ1.onreadystatechange = function (event) { 
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            reponse1 = JSON.parse(this.responseText);
            reponse1.fields=reponse1.fields.sort(TriParNom);
            creationListe(reponse1);
        }else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

requ2.onreadystatechange = function (event) { //Requete GetObjectifAPI
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            reponse2 = JSON.parse(this.responseText);
            creationObjectif(reponse2);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

requ3.onreadystatechange = function (event) { //Requete SetObjectifAPI
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

requ4.onreadystatechange = function (event) { //Requete SetObjectifAPI
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            //console.log("Réponse reçue: %s", this.responseText);
            console.log("OK")
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

/*********** Gestions Selects **********/
function changeFormation(e)
{
    if(selectFormation.value!="default")
    {
        if (selectFormation.value != "defaut") // si c'est pas le choix par defaut
        {
            requ.open('POST', 'index.php?page=SessionAPI', true);
            requ.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            var id = selectFormation.value;
            var args = "idForm=" + id;
            requ.send(args);
        }
    }
}
/************** fonctions de tri du tableau ******************/
function TriParNom(a, b) { //Tri la liste des stagiaires par ordre Alphabétique
    if (a.nomStagiaire<b.nomStagiaire)
    {
       return -1;
    }
    else{
        if (a.nomStagiaire > b.nomStagiaire)
        {
            return 1;
        }
        else{
            if (a.prenomStagiaire<b.prenomStagiaire)
            {
                return -1;
            }
            else{
                if (a.prenomStagiaire>b.prenomStagiaire)
                {
                    return 1;
                }
                else{
                    return 0;
                }
            }
        }
    }
  }


/* Creation du Select Sessions */
function ajoutSession(reponse)
{
    selectSession.innerHTML = "";
    if(reponse.length==0)
    {
        let defaut=document.createElement("option");
        defaut.setAttribute("value","default");
        defaut.innerHTML="Acune Offre à afficher";
        selectSession.appendChild(defaut);
    }
    else{
        if(reponse.length>1) // Si nombre de sessions>1
        {
            let defaut=document.createElement("option");
            defaut.setAttribute("value","default");
            defaut.innerHTML="Selectionnez une offre";
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
/*************************************************************************/
/**************** Gestion de la liste des stagiaires *********************/
/*************************************************************************/
function affichageListe (e)
{
    if(selectSession.value!="default")
    {
        requ1.open('POST', 'index.php?page=ListeStagiairesAPI', true);
        requ1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        var id = selectSession.value;
        var args = "idSession=" + id;
        requ1.send(args);
    }
}
function formDate(date)
{
    let temp=new Date (date);
    let Jours=temp.getDate();
    let Mois=(temp.getMonth()+1);
    if (Jours<10){Jours="0"+Jours};
    if (Mois<10){Mois="0"+Mois};
    return(Jours+"/"+Mois+"/"+temp.getFullYear());
}

function infoBulles(e)
{
    let element=e.target;
    if(e.target.getAttribute("class")!="case mini relatif")
    {
        element=e.target.parentNode;
    }
    let texte=element.getAttribute("textinfo");
    let infobulle=element.getElementsByClassName("texteInfoBulle")[0];
    infobulle.textContent=texte;
    infobulle.style.display="flex";  
    setTimeout(function()
    {
       infobulle.style.display="none"; 
    }, 1000); 
}

/******* Action à faire pour télécharger la convention de stage *********/
function downloadConvention(e) 
{
    let element=e.target;
    if(e.target.getAttribute("class")=="indic")
    {
        element=e.target.parentNode;
    }
    let id=element.getAttribute("idStage");
    requ4.open('POST', 'index.php?page=ConventionPdf', true);
    requ4.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var args = "idStage=" + id;
    requ4.send(args);
    
}

/** Création de la liste des stagiaires **/
function creationListe(liste)
{
    let tabStagiaires=liste.fields;
    let nbPeriodes=liste.nbPeriodes;
    affichage.innerHTML="";
    let ligne=document.createElement("div");
    let nom=document.createElement("div");
    nom.setAttribute("class","case bordureTitre centerItem");
    nom.innerHTML="Nom";
    ligne.appendChild(nom);
    let prenom=document.createElement("div");
    prenom.setAttribute("class","case bordureTitre centerItem");
    prenom.innerHTML="Prenom";
    ligne.appendChild(prenom);
    // Affichage des colonnes des periodes de stages 
    for (let i = 0; i < nbPeriodes; i++) {
        let periode=document.createElement("div");
        periode.setAttribute("class","case bordureTitre mini centre");
        periode.innerHTML="Période du "+formDate(liste['dateDebut'+i])+"<br>"+"Au "+formDate(liste['dateFin'+i]);
        formDate(liste['dateDebut'+i]);
        ligne.appendChild(periode);   
    }
    affichage.appendChild(ligne);
    for(let i=0;i<tabStagiaires.length;i++)
    {
        let ligne=document.createElement("div");
        ligne.setAttribute("class","stagiaire");
        let nom=document.createElement("div");
        nom.setAttribute("class","case centerItem");
        nom.innerHTML=tabStagiaires[i]['nomStagiaire'];
        ligne.appendChild(nom);
        let prenom=document.createElement("div");
        prenom.setAttribute("class","case centerItem");
        prenom.innerHTML=tabStagiaires[i]['prenomStagiaire'];
        ligne.appendChild(prenom);
        let color;
        for (let j = 0; j < liste.nbPeriodes; j++) {
            let etape=tabStagiaires[i].etape[j].etapeStage; //Récupère le l'étape du stage
            let idStage=tabStagiaires[i].etape[j].idStage;  //Récupère l'id du stage
            switch(etape) // Détermine la couleur de l'indicateur en fonction de l'étape du stage
            {             // Ainsi que le texte à afficher dans l'info bulle
                case "1":
                    color="red";
                    info="Adresse du tuteur Saisie";
                    break;
                case "2":
                    color="orange";
                    info="Informations de l'entreprise Saisies";
                    break;
                case "3":
                    color="yellow";
                    info="Sujet de stage saisi";
                    break;
                case "4":
                    color="green";
                    info="Convention de stage signée. Double-cliquez pour télécharger";
                    break;
                case "5":
                    color="none";
                    info="Stage terminé";
                    icone='<i class="far fa-check-circle"></i>'; //icone F.A check
                    break;
                default:
                    color="none";
                    info="Aucun Stage Saisie";
            }
            // création des cases périodes avec les indicateurs de couleur
            let periode=document.createElement("div");
            periode.setAttribute("class","case mini relatif");
            periode.setAttribute("textinfo",info);
            periode.setAttribute("idStage",idStage);
            if(etape==5){ //Si le stage est à l'étape 5 on affiche l'icone check
               periode.innerHTML=icone;
               periode.style.color="lightgreen";
               periode.addEventListener("click",infoBulles);
            } 
            else{ //si non on affiche la div avec la couleur de l'étape du stage
                let indic=document.createElement("div");
                indic.setAttribute("class","indic");
                indic.style.backgroundColor=color;
                indic.addEventListener("click",infoBulles);
                periode.appendChild(indic);
            };
            //Création des div pour les infos bulles
            let texteInfoBulle=document.createElement("div");
            texteInfoBulle.setAttribute("class","texteInfoBulle");
            texteInfoBulle.textContent="Test des infos bulles"; 
            periode.appendChild(texteInfoBulle);
            ligne.appendChild(periode);  
            if (etape==4) // Rend la case cliquable si le stage est à l'étape verte
            {
                periode.addEventListener("dblclick",downloadConvention);
            } 
            periode.addEventListener("click",infoBulles); //Evenement pour l'affichage des infos bulles.
        }
        affichage.appendChild(ligne);
    }
    var lesIcones=document.getElementsByTagName("i");
    for (let i=0;i<lesIcones.length;i++)
    {
        lesIcones[i].addEventListener("click",infoBulles);
    }
}
/*******************************************************************/
/**************** Gestion des objectifs de PAE *********************/
/*******************************************************************/
function affichageObjectif (e)
{
    if(selectSession.value!="default")
    {
        requ2.open('POST', 'index.php?page=GetObjectifAPI', true);
        requ2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        var id = selectSession.value;
        var args = "idSession=" + id;
        requ2.send(args);
    }
}

/** Action quand on clique sur le bouton Sauvegarde **/
function sauvegardeObj(e) 
{
    box=e.target.parentNode.parentNode;
    e.target.style.display="none";
    let idPeriode=box.id;
    let txtObjectif=box.getElementsByTagName("textarea")[0].value;
    requ3.open('POST', 'index.php?page=SetObjectifAPI', true);
    requ3.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var args = "id="+idPeriode+"&text="+txtObjectif;
    requ3.send(args);
}

/** Action quand il y a un changement dans les textarea PAE  **/
function modifChamp(e) 
{
    let zone=e.target.parentNode;
    zone.getElementsByTagName("button")[0].style.display="block";
}

/**Creation de l'affichage des differentes périodes en Entreprise **/
function creationObjectif(reponse) 
{
    affichage.innerHTML="";
    let nbPeriodes=reponse.nbPeriodes;
    let tabPeriodes=reponse.fields;
    for(let i=0;i<nbPeriodes;i++)
    {
        // Creation de la case
        let container=document.createElement("div");
        container.id=tabPeriodes[i]['idPeriode'];
        container.setAttribute("class","case colonne centre");
        // Creation du titre
        let titre=document.createElement("div");
        titre.setAttribute("class"," colonne centre pad");
        titre.innerHTML="Objectif pour la période du "+formDate(tabPeriodes[i]['dateDebutPAE'])+" au "+formDate(tabPeriodes[i]['dateFinPAE']);
        container.appendChild(titre);
        // Div Vide
        let vide=document.createElement("div");
        vide.setAttribute("class","espaceHor");
        container.appendChild(vide);
        // Creation du textArea
        let divText=document.createElement("textarea");
        divText.id="textObjectif";
        divText.setAttribute("rows","10");
        divText.style.width="90%";
        divText.innerHTML=tabPeriodes[i]['objectifPAE'];
        container.appendChild(divText);
        // Div Vide
        let vide2=document.createElement("div");
        vide2.setAttribute("class","espaceHor");
        container.appendChild(vide2);
        // Creation du bouton de sauvegarde
        let zoneBouton=document.createElement("div");
        let bouton=document.createElement("button");
        bouton.setAttribute("class","bouton sauvegarde");
        bouton.style.display="none";
        bouton.innerHTML='<i class="far fa-save"></i>&nbsp;Sauvegarder';
        zoneBouton.appendChild(bouton);
        container.appendChild(zoneBouton);
        // Div Vide
        let vide3=document.createElement("div");
        vide3.setAttribute("class","espaceHor");
        container.appendChild(vide3);
        affichage.appendChild(container);
        // Div interligne
        let inter=document.createElement("div");
        inter.setAttribute("class","espaceHor");
        affichage.appendChild(inter);
    }
    var btnSauve=document.getElementsByClassName("sauvegarde"); // Ajoute l'evenement sur les boutons sauvegarde
    for (let k = 0; k < btnSauve.length; k++) {
        btnSauve[k].addEventListener("click",sauvegardeObj);
    }
    var txt=document.getElementsByTagName("textarea"); //Ajoute l'evenement sur le text area pour afficher le bouton sauvegarde
    for (let k = 0; k < txt.length; k++) {
        txt[k].addEventListener("input",modifChamp);
    }
}
changeFormation();

