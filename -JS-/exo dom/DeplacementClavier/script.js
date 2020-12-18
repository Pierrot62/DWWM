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

function deplace(dLeft, dTop) {
    var styleCarre = window.getComputedStyle(carre, null);
    var topActuel = styleCarre.top;
    var leftActuel = styleCarre.left;
    carre.style.top = parseInt(topActuel) + dTop + "px";
    carre.style.left = parseInt(leftActuel) + dLeft + "px";
}

