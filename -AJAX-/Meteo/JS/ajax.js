var inputVille = document.getElementById("ville");
console.log(inputVille)
inputVille.addEventListener("blur", recupVille);

function recupVille() {
    var ville = inputVille.value;
    console.log(ville);
}


// // Utilisation de l'Ajax pour appeler l'API et récuperer les enregistrements
// var contenu = document.getElementById("contenu");
// var enregs; // contient la reponse de l'API
// // on définit une requete
// const req = new XMLHttpRequest();
// //on vérifie les changements d'états de la requête
// req.onreadystatechange = function (event) {
//     if (this.readyState === XMLHttpRequest.DONE) {
//         if (this.status === 200) {
//             // la requete a abouti et a fournit une reponse
//             //on décode la réponse, pour obtenir un objet
//             reponse = JSON.parse(this.responseText);
//             console.log(this.responseText);
//             console.log(reponse);
//             enregs = reponse.records;
//             for (let i = 0; i < enregs.length; i++) {
//                 // on crée la ligne et les div internes
//                 ligne = document.createElement("div");
//                 ligne.setAttribute("class", "ligne");
//                 ligne.id = i;
//                 commune = document.createElement("div");
//                 commune.setAttribute("class", "commune");
//                 ligne.appendChild(commune);
//                 libelle = document.createElement("div");
//                 libelle.setAttribute("class", "libelle");
//                 ligne.appendChild(libelle);
//                 etat = document.createElement("div");
//                 etat.setAttribute("class", "etat");
//                 ligne.appendChild(etat);
//                 contenu.appendChild(ligne);
//                 espace = document.createElement("div");
//                 espace.setAttribute("class","espaceHorizon");
//                 contenu.appendChild(espace);
//                 //on met à jour le contenu
//                 commune.innerHTML = enregs[i].fields.commune;
//                 libelle.innerHTML = enregs[i].fields.nom;
//                 etat.innerHTML = enregs[i].fields.etat;

//                 // on ajoute un evenement sur ligne pour afficher le detail
//                 ligne.addEventListener("click", afficheDetail);
//             }
//             console.log("Réponse reçue: %s", this.responseText);
//         } else {
//             console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
//         }
//     }
// };

// //on envoi la requête
// req.open('GET', 'https://api.openweathermap.org/data/2.5/weather?q=' + ville + '&appid=229a7f1ca981d5bf71a3e305c2af64ea&units=metric', true);
// req.send(null);