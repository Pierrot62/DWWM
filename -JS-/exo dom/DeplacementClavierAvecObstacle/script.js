var carre = document.getElementById("carre");

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

},);

var carre = window.getComputedStyle(object, null);
var l = carre.top;
var w = carre.width;

var w = window.getComputedStyle(carre, null);
var lob = window.getComputedStyle(carre, null);
var wob = window.getComputedStyle(carre, null);


l < lob + wob && l + w > lob && t < tob + hob && t + h > tob

if (condition) {
    
}

function deplace(dLeft, dTop) {
    var styleCarre = window.getComputedStyle(carre, null);
    var topActuel = styleCarre.top;
    var leftActuel = styleCarre.left;
    carre.style.top = parseInt(topActuel) + dTop + "px";
    carre.style.left = parseInt(leftActuel) + dLeft + "px";
}

