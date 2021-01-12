const requ = new XMLHttpRequest();

requ.onreadystatechange = function(event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            var divCount  = document.getElementById("total");
            reponse=JSON.parse(this.responseText);
            console.log(reponse);
           //on traite les éléments de la liste ....
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

requ.open('POST', '/06 - Web Dynamique/02 - Ajax/04 - Exemples API Interne/03 - AJAX Personne - avec parametres/index.php?codePage=listeAPI', true);
requ.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
var args = "idPersonne=1";
// var args = "idPersonne=1&test=2";
requ.send(args);
