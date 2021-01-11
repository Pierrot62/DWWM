const requ = new XMLHttpRequest();

requ.onreadystatechange = function(event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            var divCount  = document.getElementById("total");
            reponse=JSON.parse(this.responseText);
            console.log(reponse);
            divCount.innerHTML=reponse.nb;
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

requ.open('GET', '/06 - Web Dynamique/02 - Ajax/04 - Exemples API Interne/01 - AJAX Personne/PHP/Model/Count.php', true);
requ.send(null);