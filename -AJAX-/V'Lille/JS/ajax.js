//recup des champs

// Utilisation de l'Ajax pour appeler l'API et récuperer les enregistrements
var contenu = document.getElementById("contenu");
var enregs; // contient la reponse de l'API

//fonction de tri du tableau
function TriStations(a, b) {
    if (a.fields.commune<b.fields.commune)
    {
       return -1;
    }
    else{
        if (a.fields.commune > b.fields.commune)
        {
            return 1;
        }
        else{
            if (a.fields.nom<b.fields.nom)
            {
                return -1;
            }
            else{
                if (a.fields.nom>b.fields.nom)
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


// on définit une requete
const req = new XMLHttpRequest();
//on vérifie les changements d'états de la requête
req.onreadystatechange = function (event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            // la requete a abouti et a fournit une reponse
            //on décode la réponse, pour obtenir un objet
            reponse = JSON.parse(this.responseText);
            console.log(this.responseText);
            console.log(reponse);
            enregs = reponse.records;
            enregs=enregs.sort(TriStations);
            for (let i = 0; i < enregs.length; i++) {
                // on crée la ligne et les div internes
                ligne = document.createElement("div");
                ligne.setAttribute("class", "ligne");
                ligne.id = i;
                divIco = document.createElement("i");
                ligne.appendChild(divIco);
                commune = document.createElement("div");
                commune.setAttribute("class", "commune");
                ligne.appendChild(commune);
                libelle = document.createElement("div");
                libelle.setAttribute("class", "libelle");
                ligne.appendChild(libelle);
                etat = document.createElement("div");
                etat.setAttribute("class", "etat");
                ligne.appendChild(etat);
                contenu.appendChild(ligne);
                espace = document.createElement("div");
                espace.setAttribute("class","espaceHorizon");
                contenu.appendChild(espace);
                //on met à jour le contenu
                if (enregs[i].fields.etat ==  "EN SERVICE") {
                    divIco.setAttribute("class", "fas fa-check vert");
                } else {
                    divIco.setAttribute("class", "fas fa-times rouge");
                    ligne.style.opacity = ("0.5");
                }
                commune.innerHTML = enregs[i].fields.commune;
                libelle.innerHTML = enregs[i].fields.nom;
                etat.innerHTML = enregs[i].fields.etat;

                // on ajoute un evenement sur ligne pour afficher le detail
                ligne.addEventListener("click", afficheDetail);
            }
            console.log("Réponse reçue: %s", this.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

function afficheDetail(e) {
    veloClique = (e.target).parentNode;
    veloClique.removeEventListener("click", afficheDetail);
    detail = document.createElement("div");
    detail.setAttribute("class", "detail");
    adresse = document.createElement("div");
    adresse.setAttribute("class", "adresse");
    detail.appendChild(adresse);
    dispo = document.createElement("div");
    dispo.setAttribute("class", "dispo");
    detail.appendChild(dispo);
    // ico = document.createElement("i");
    // ico.setAttribute("class", "fas fa-bicycle");
    // ico.appendChild(nbvelosdispo);
    nbvelosdispo = document.createElement("div");
    nbvelosdispo.setAttribute("class", "nbvelosdispo");
    detail.appendChild(nbvelosdispo);
    adresse.innerHTML = enregs[veloClique.id].fields.adresse;
    dispo.innerHTML = enregs[veloClique.id].fields.etat;
    nbvelosdispo.innerHTML= "  Nb de velo disponible : " + enregs[veloClique.id].fields.nbvelosdispo;
    contenu.insertBefore(detail, veloClique.nextSibling);
}

// maj.innerHTML= "mis a jour : " + enregs.facet.datemiseajour;

//on envoi la requête
req.open('GET', 'https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=50&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&facet=datemiseajour', true);
req.send(null);