
var buttonCliquer = document.getElementsByClassName("button");

console.log(buttonCliquer);

for (let i = 0; i < buttonCliquer.length; i++) {

    buttonCliquer[i].addEventListener("click", calcul);
 
}


function calcul(e) {
    var valeur = "";
    valeur = e.target.id;
    var = valeur;
    console.log(valeur);

}
