var recto = document.getElementsByClassName("recto");
var verso = document.getElementsByClassName("verso");
var afficheGagner = document.getElementById("gagner");
var buttonReset = document.getElementById("reset");
var button = document.getElementById("solution");
var affichePaire = (document.getElementById("nbPaire").innerHTML = "Nombre de paire trouver : 0");
var afficheNbCoup = (document.getElementById("nbCoup").innerHTML = "Nombre de clics : 0");
var chrono = document.getElementById("chrono");

var etat = true;
var sol = false;
var check = [];
var memorecto = [];
var memoverso = [];
var compteurPaire = 0;
var nbCoup = 0;

afficheGagner.addEventListener("click", function () {
    document.location.reload();
});
buttonReset.addEventListener("click", function () {
    document.location.reload();
});

console.log(compteurPaire);

for (let i = 0; i < recto.length; i++) {
    recto[i].addEventListener("click", function (e) {
        if (check.length < 2) {
            returnImg(e, true);
        }
        nbCoup++;
        var afficheNbCoup = (document.getElementById("nbCoup").innerHTML = "Nombre de clics : " + nbCoup);
        console.log(nbCoup);
        if (check.length == 2) {
            if (check[0] == check[1]) {
                compteurPaire++;
                var affichePaire = (document.getElementById("nbPaire").innerHTML = "Nombre de paire trouver : " + compteurPaire);
                check = [];
                memoverso = [];
                memorecto = [];
                if (compteurPaire == 1) {
                    for (let i = 0; i < recto.length; i++) {
                        recto[i].style.opacity = "0.5";
                        verso[i].style.opacity = "0.5";
                    }
                    afficheGagner.style.display = "flex"
                }
            } else {
                timeout = setTimeout(returnImg, 1000, e, false);
            }
            etat = false;
        }
    });
}

function returnImg(e, etat, compteurPaire) {
    if (check.length == 2) {
        if (check[0] == check[1]) {
            check = [];
        }
        etat = false;
    }
    var imgCliquer = e.target.parentNode.getElementsByClassName("verso")[0];
    if (etat == true) {
        imgCliquer.style.display = "flex";
        check.push(imgCliquer.getAttribute("src"));
        e.target.style.display = "none";
        memoverso.push(imgCliquer);
        memorecto.push(e.target);
    } else {
        memorecto[0].style.display = "flex";
        memorecto[1].style.display = "flex";
        memoverso[0].style.display = "none";
        memoverso[1].style.display = "none";
        check = [];
        memorecto = [];
        memoverso = [];
    }
}

button.addEventListener("click", solution);

function solution() {
    var listeRecto = document.getElementsByClassName("recto");
    var listeVerso = document.getElementsByClassName("verso");
    for (let i = 0; i < listeRecto.length; i++) {
        if (sol == false) {
            listeRecto[i].style.display = "none";
            listeVerso[i].style.display = "flex";
        } else if (sol == true) {
            listeRecto[i].style.display = "flex";
            listeVerso[i].style.display = "none";
        }
    }
    if (sol == false) {
        sol = true;
    } else {
        sol = false;
    }
}

var min = 0;
var sec = 0;
var secTemp = 0;

//CHRONO
var chrono = document.getElementById("chrono");
function timer() {
    sec++;
    if (sec >= 60) {
        if (secTemp != 0 && sec > 55) {
            secTemp = sec - secTemp;
            sec = secTemp;
            min++;
            secTemp = 0;
        } else {
            sec = 0;
            min++;
            secTemp = 0;
        }
    }
    if (min < 10) {
        time = "0" + min;
    } else {
        time = min;
    }
    if (sec < 10) {
        time += ":0" + sec;
    } else {
        time += ":" + sec;
    }
    chrono.innerHTML = time;
    horloge = setTimeout("timer()", 1000);
}
