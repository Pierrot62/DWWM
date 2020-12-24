function modifieDessert(e)
{

    e.target.textContent = prompt("quel dessert",e.target.textContent);

}
function ajoutDessert (){

    var nouvLi = document.createElement("li");
    nouvLi.textContent = prompt("quel dessert");
    nouvLi.className="jaune gras";
    nouvLi.addEventListener("click",  modifieDessert );
    document.getElementById("desserts").appendChild(nouvLi);

}

var ajoutBtnElt = document.querySelector("button");

ajoutBtnElt.addEventListener("click", ajoutDessert);


