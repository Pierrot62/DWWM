var listeA = document.getElementsByClassName("lien");
for (let i = 0; i < listeA.length; i++) {
    listeA[i].addEventListener("click",reset);
    listeA[i].addEventListener("click",actif);
}
function reset() {
    for (let i = 0; i < listeA.length; i++) {

        listeA[i].removeAttribute("class","actif");
    }
}
function actif(elm) {
    elm.target.setAttribute("class","actif");
}