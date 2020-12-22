var recto = document.getElementsByClassName("recto");
var etat = true;
var check = [];
var memorecto = [];
var memoverso = [];

for (let i = 0; i < recto.length; i++) {
    recto[i].addEventListener("click", function (e) {
        if (check.length < 2) {
            returnImg(e, true);
        }
        if (check.length == 2) {
            if (check[0] == check[1]) {
                alert("gagner");
                check = [];
                memoverso = [];
                memorecto = [];
            } else {
                timeout = setTimeout(returnImg, 3000, e, false);
            }
            etat = false;
        }
    });
}

function returnImg(e, etat) {
    if (check.length == 2) {
        if (check[0] == check[1]) {
            check = [];
        }
        etat = false
    }
    var imgCliquer = e.target.parentNode.getElementsByClassName("verso")[0];
    if (etat == true) {
        imgCliquer.style.display = "flex";
        check.push(imgCliquer.getAttribute("src"));
        e.target.style.display = "none";
        memoverso.push(imgCliquer);
        memorecto.push(e.target);
    } else {
        memorecto[0].style.display = "flex"
        memorecto[1].style.display = "flex"
        memoverso[0].style.display = "none"
        memoverso[1].style.display = "none"
        check = [];
        memorecto = [];
        memoverso = [];
    }

}
