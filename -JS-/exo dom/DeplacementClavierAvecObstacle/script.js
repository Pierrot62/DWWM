var carre = document.getElementById("carre");
var objet = document.getElementById("objet");


window.addEventListener("keydown", function (event) {

    switch (event.key) {
        case "ArrowDown":
            deplace(0, 5);
            break;
        case "ArrowUp":
            deplace(0, -5);
            break;
        case "ArrowLeft":
            deplace(-5, 0);
            break;
        case "ArrowRight":
            deplace(5, 0);
    }

});



function deplace(dLeft, dTop) {

    var carreInfo = window.getComputedStyle(carre);
    var l = parseInt(carreInfo.left);
    var w = parseInt(carreInfo.width);
    var t = parseInt(carreInfo.top);
    var h = parseInt(carreInfo.height);
    var objetInfo = window.getComputedStyle(objet);
    var lob = parseInt(objetInfo.left);
    var wob = parseInt(objetInfo.width);
    var tob = parseInt(objetInfo.top);
    var hob = parseInt(objetInfo.height);

    var styleCarre = window.getComputedStyle(carre);
    var topActuel = styleCarre.top;
    var leftActuel = styleCarre.left;

    if (l < lob + wob && l + w > lob && t < tob + hob && t + h > tob) {
        carre.style.top = 100 + "px";
        carre.style.left = 100 + "px";
    }else{
        carre.style.top = parseInt(topActuel) + dTop + "px";
        carre.style.left = parseInt(leftActuel) + dLeft + "px";
    }
}