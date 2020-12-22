// var carre = document.getElementById("carre");
// var objet = document.getElementById("objet");

// function deplace(dLeft, dTop) {

//     var carreInfo = window.getComputedStyle(carre);
//     var l = parseInt(carreInfo.left);
//     var w = parseInt(carreInfo.width);
//     var t = parseInt(carreInfo.top);
//     var h = parseInt(carreInfo.height);
//     var objetInfo = window.getComputedStyle(objet);
//     var lob = parseInt(objetInfo.left);
//     var wob = parseInt(objetInfo.width);
//     var tob = parseInt(objetInfo.top);
//     var hob = parseInt(objetInfo.height);

//     var styleCarre = window.getComputedStyle(carre);
//     var topActuel = styleCarre.top;
//     var leftActuel = styleCarre.left;

//     if (l < lob + wob && l + w > lob && t < tob + hob && t + h > tob) {
//         carre.style.top = 100 + "px";
//         carre.style.left = 100 + "px";
//     }else{
//         carre.style.top = parseInt(topActuel) + dTop + "px";
//         carre.style.left = parseInt(leftActuel) + dLeft + "px";
//     }
// }


var son = new Audio('chef.mp3');
var audio = new Audio('bip.mp3');
var compteurCollision = 0;

window.addEventListener("keydown", function (event) {

    switch (event.key) {
      
        case "ArrowDown":
            deplace(0, 5);
            // audio.play();
            break;
        case "ArrowUp":
            deplace(0, -5);
            // audio.play();
            break;
        case "ArrowLeft":
            deplace(-5, 0);
            // audio.play();
            break;
        case "ArrowRight":
            deplace(5, 0);
            // audio.play();
    }

});

function deplace(dx, dy) {
    var deplacement_ok = true;
    var styleCarre = window.getComputedStyle(document.getElementById('carre'), null);
    var t = parseInt(styleCarre.top);
    var l = parseInt(styleCarre.left);
    var w = parseInt(styleCarre.width);
    var h = parseInt(styleCarre.height);
    var listeObs = document.querySelectorAll('.obstacle');
    listeObs.forEach(function (elt) {
        var styleObst = window.getComputedStyle(elt, null);
        var tob = parseInt(styleObst.top);
        var lob = parseInt(styleObst.left);
        var wob = parseInt(styleObst.width);
        var hob = parseInt(styleObst.height);
        deplacement_ok = deplacement_ok && depl_ok(tob, lob, wob, hob, t + dy, l + dx, w, h, elt);

    });
    if (deplacement_ok) {
        document.getElementById('carre').style.top = t + dy + 'px';
        document.getElementById('carre').style.left = l + dx + 'px';
    }
}

function depl_ok(tob, lob, wob, hob, t, l, w, h, obstacle) {
    
    if(l < lob + wob && l + w > lob && t < tob + hob && t + h > tob) {
       if (obstacle.className == 'arriver') {
           alert("gg");
       }
       else{
        compteurCollision ++
        document.getElementById("afficheColision").innerHTML = "Nombre de colission : "+compteurCollision
        
       }
        // son.play();
       return false
        
        }
    return true;
}

var ecartY, ecartX; // repère le décalage entre le coin suprieur du carré et la souris
var carre = document.getElementById('carre');
var flagMouv = false;


carre.addEventListener("mousedown", (e) => {
    // on repere l'ecart entre la souris et le haut du carré, pourgarder cet ecart pendant le déplacement
    ecartY = parseInt(window.getComputedStyle(carre).top) - parseInt(e.clientY);
    ecartX = parseInt(window.getComputedStyle(carre).left) - parseInt(e.clientX);
    // on autorise le déplacement
    flagMouv = true;
});

document.addEventListener("mousemove", (e) => {
    // on déplace si le mouvement est autorisé
    if (flagMouv == true) {
        deplaceSouris(e);
    }
});

carre.addEventListener("mouseup", (e) => {
    //on interdit le deplacement
    flagMouv = false;
});


function deplaceSouris(e) {
    var arriveeCase=document.querySelector(".arriver");
    if (arrivee(arriveeCase, parseInt(e.clientY)+ecartY,parseInt(e.clientX)+ecartX)) {
        console.log("BITE");
    }
    else if (!collisionObstacles(parseInt(e.clientY) + ecartY, parseInt(e.clientX) + ecartX)) {
        // if (!collisionObstacles(parseInt(e.clientY) + ecartY, parseInt(e.clientX) + ecartX)) {
        // on deplace le carré en fonction de la position de la souris et de l'ecart du départ
        carre.style.top = parseInt(e.clientY) + ecartY + "px";
        carre.style.left = parseInt(e.clientX) + ecartX + "px";
    }
};

function collisionUnObstacle(obstacle, posX, posY) {
    var styleObjet = window.getComputedStyle(carre);
    var w = parseInt(styleObjet.width);
    var h = parseInt(styleObjet.height);
    var styleObstacle = window.getComputedStyle(obstacle);
    var tob = parseInt(styleObstacle.top);
    var lob = parseInt(styleObstacle.left);
    var wob = parseInt(styleObstacle.width);
    var hob = parseInt(styleObstacle.height);
    if (posY < lob + wob && posY + w > lob && posX < tob + hob && posX + h > tob) {
        console.log("collision n°" + compteurCollision + "  " + obstacle.id);
        flagMouv = false;

        compteurCollision++;
        document.getElementById("afficheColision").innerHTML = "Nombre de colission : "+compteurCollision

        return true;
    }
    
    return false;
}


function collisionObstacles(posX, posY) {
    var pasCollision = true;
    var listeObstacles = document.querySelectorAll('.obstacle');

    //on teste pour chacun des obstacles
    listeObstacles.forEach(function (obstacle) {
        pasCollision = pasCollision && !collisionUnObstacle(obstacle, posX, posY);
    });
    return !pasCollision;
}

function arrivee (arriver, posX, posY) {
    var styleObjet = window.getComputedStyle(carre);
    var w = parseInt(styleObjet.width);
    var h = parseInt(styleObjet.height);
    var styleArriver = window.getComputedStyle(arriver);
    var tob = parseInt(styleArriver.top);
    var lob = parseInt(styleArriver.left);
    var wob = parseInt(styleArriver.width);
    var hob = parseInt(styleArriver.height);
    if (posY < lob + wob && posY + w > lob && posX < tob + hob && posX + h > tob) {
        alert("Vous êtes arrivé !");
        flagMouv = false;

        return true;
    }
}

function depart() {
    intervalTimer = setInterval(timer , 1000);
}
function fin() {
    clearInterval(intervalTimer);
    document.getElementById("chrono")
}