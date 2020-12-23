//Recuperation des elements
var buttonPlein = document.getElementsByClassName("plein");
var buttonVide = document.getElementsByClassName("vide");
console.log(buttonVide);




var nb = [1, 2, 3, 4, 5, 6, 7, 8]
nb = nb.map(p => [p, Math.random()]);
nb = nb.sort((a, b) => a[1] - b[1]);
nb = nb.map(p => p[0]);
//Ajout de l'ecouteur de clique sur chaque button qui ont la classe "plein" && Ajout du backround-image Random
for (let i = 0; i < buttonPlein.length; i++) {
    buttonPlein[i].addEventListener("click", (e)=>{
        recupInfos(e)
    });
    buttonPlein[i].innerHTML = nb[i];
    buttonPlein[i].style.backgroundImage = ("url(\"./img/" + nb[i] + ".jpg\"");
}

function recupInfos(e) {
    var xPlein = e.target.getAttribute("x");
    var yPlein = e.target.getAttribute("y");
    var stylePlein = window.getComputedStyle(e.target).backgroundImage;
    for (let i in buttonVide) {
        var xVide = buttonVide[i].getAttribute("x");
        var yVide = buttonVide[i].getAttribute("y");
        // e.target.setAttribute("x",xVide);
        // e.target.setAttribute("y",yVide);
        // buttonVide[i].setAttribute("x",xPlein);
        // buttonVide[i].setAttribute("y",yPlein);
        var styleVide = window.getComputedStyle(buttonVide[i]).backgroundImage;
        e.target.style.backgroundImage = styleVide;
        buttonVide[i].style.backgroundImage = stylePlein;
        e.target.setAttribute("class", "vide");
        buttonVide[i].setAttribute("class", "plein");
        buttonVide = document.getElementsByClassName("vide");

    }



    // if ((Math.abs(xVide - xPlein) == 1) ^ Math.abs(yVide - yPlein) == 1) {
    //     alert("salut")

    // } else {
    //     alert("bye")
    // }
}