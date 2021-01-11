var inputVille = document.getElementById("ville");
var afficheVille = document.getElementById("nomVille");
var ico = document.getElementById("ico");
var temperature = document.getElementById("temp");
var meteo = document.getElementById("meteo");
var tempMax = document.getElementById("tempMax");
var tempMin = document.getElementById("tempMin");
var vitesseVent = document.getElementById("ventVitesse");
var body = document.getElementsByTagName("body");

inputVille.addEventListener("blur", recupVille);

function recupVille() {
    console.log(inputVille.value);
    afficheVille.innerHTML = inputVille.value;
    //on envoi la requête
    req.open('GET', 'http://api.openweathermap.org/data/2.5/weather?q= ' + inputVille.value + '&appid=4f00f8b80c9b221ffd12e64353e31667&units=metric&lang=fr', true);
    req.send(null);
}

// Utilisation de l'Ajax pour appeler l'API et récuperer les enregistrements
var enregs; // contient la reponse de l'API
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
                ico.setAttribute("src","./Images/" + reponse.weather[0].icon + ".png");
                temperature.innerHTML = "Température actuelle : " + reponse.main.temp + " °";
                meteo.innerHTML = "Meteo actuelle : " + reponse.weather[0].description;
                tempMax.innerHTML = "Temperature Maximale "+ reponse.main.temp_max + " °";
                tempMin.innerHTML = "Temperature Minimale "+ reponse.main.temp_min + " °";
                vitesseVent.innerHTML = "Vitesse du vent  "+ reponse.wind.speed + " m/s";


                var heureCoucher = reponse.sys.sunset * 1000;
                var heureLever = reponse.sys.sunrise * 1000;
                var coucher = new Date(heureCoucher);
                var lever = new Date(heureLever);
                var heureSys = new Date();
                console.log(lever);
                console.log(coucher);
                console.log(heureSys);
               

                if (coucher >= heureSys) {
                    body.style.backgroundColor = "black";
                    body.style.color = "white";
                } else if (lever >= heureSys ){
                    body.style.backgroundColor = "white";
                    body.style.color = "black";
                }

                console.log("Réponse reçue: %s", this.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
                temperature.innerHTML = "";
                tempMax.innerHTML = "";
                tempMin.innerHTML = "";
                vitesseVent.innerHTML = "";
                meteo.innerHTML = "Pas de meteo disponible pour cette ville ";
        }
    }
};