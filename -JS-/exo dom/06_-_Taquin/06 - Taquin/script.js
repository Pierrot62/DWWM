var boutons = document.getElementsByClassName("carre");
var win=["url(\"http://afpacentre/05%20-%20WEB%20DYNAMIQUE/06%20-%20Taquin/1.jpg\")",
"url(\"http://afpacentre/05%20-%20WEB%20DYNAMIQUE/06%20-%20Taquin/2.jpg\")",
"url(\"http://afpacentre/05%20-%20WEB%20DYNAMIQUE/06%20-%20Taquin/3.jpg\")",
"url(\"http://afpacentre/05%20-%20WEB%20DYNAMIQUE/06%20-%20Taquin/4.jpg\")",
"url(\"http://afpacentre/05%20-%20WEB%20DYNAMIQUE/06%20-%20Taquin/5.jpg\")",
"url(\"http://afpacentre/05%20-%20WEB%20DYNAMIQUE/06%20-%20Taquin/6.jpg\")",
"url(\"http://afpacentre/05%20-%20WEB%20DYNAMIQUE/06%20-%20Taquin/7.jpg\")",
"url(\"http://afpacentre/05%20-%20WEB%20DYNAMIQUE/06%20-%20Taquin/8.jpg\")",
"url(\"http://afpacentre/05%20-%20WEB%20DYNAMIQUE/06%20-%20Taquin/9.jpg\")"]

/******************************Fonctions******************************/
function deplace(e) {
    testerGagner();
    var styleClique = window.getComputedStyle(e.target).backgroundImage;
    var styleVide = window.getComputedStyle(vide).backgroundImage;
    var xClique = parseInt(e.target.getAttribute("x"));
    var yClique = parseInt(e.target.getAttribute("y"));
    var xVide = parseInt(vide.getAttribute("x"));
    var yVide = parseInt(vide.getAttribute("y"));
    if ((Math.abs(yVide - yClique) == 1 ^ Math.abs(xVide - xClique) == 1) && (Math.abs(yVide - yClique) < 2) && (Math.abs(xVide - xClique) < 2)) {
        e.target.style.backgroundImage = styleVide;
        vide.style.backgroundImage = styleClique;
        e.target.setAttribute("class", "void");
        vide.setAttribute("class", "carre");
        xVide = xClique;
        yVide = yClique;
        vide = document.getElementsByClassName("void")[0];
        
    } else {
        console.log("Non");
    }
}

function testerGagner(){
    var cpt=1;
    for (let i=0;i<boutons.length;i++){
        if (window.getComputedStyle(boutons[i]).backgroundImage==win[i]){
            cpt++;
        }
        console.log(cpt);
    }
    if (cpt==8){
        alert("OUIIIIII");
    }
}

/******************************Evènements*****************************/
/**Event sur le carré blanc**/

/**Random**/
var nb = [1, 2, 3, 4, 5, 6, 7, 8,9];
nb = nb.map((p) => [p, Math.random()]);
nb = nb.sort((a, b) => a[1] - b[1]);
nb = nb.map((p) => p[0]);
/**Event on click**/
for (let i=0;i<boutons.length;i++) {
    boutons[i].style.backgroundImage = 'url("' + nb[i] + '.jpg")';
    if(nb[i]==9){
        var pos=i;
    }
    boutons[i].addEventListener("click", (e) => {
        deplace(e);
    });
}
boutons[pos].setAttribute("class","void");
var vide = document.getElementsByClassName("void")[0];

