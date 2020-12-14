var image = document.getElementById("logoAfpa");
image.src = "afpa_noir.jpg";







var image = document.getElementById("logoAfpa");
image.src = "afpa_noir.jpg";
image.style.width = "10%";
// var div1 = document.getElementById("text1");
// div1.style.backgroundColor="red";
//1ere technique
var textes = document.getElementsByClassName("texte");
for (let i = 0; i < textes.length; i++) {
    textes[i].style.fontSize = "1.5em";
}
//2eme technique
//ramène toutes les classes
var textes2 = document.querySelectorAll(".texte");
textes2.forEach(element => {
    element.style.fontSize = "0.8em";
})
//ramène la première occurence
var texte1 = document.querySelector(".texte");
texte1.style.backgroundColor = "red";

//1ere version
//je recupere les articles
lesArticles = document.getElementsByTagName("article");
for (let i = 0; i < lesArticles.length; i++) {
    //j'ecoute l'evenement click sur les articles et je lance la fonction vert
    lesArticles[i].addEventListener("click", vert);
}

function vert() {
    for (let i = 0; i < lesArticles.length; i++) {
        lesArticles[i].style.color = "green";
    }
}

//2eme version
lesArticles = document.getElementsByTagName("article");
for (let i = 0; i < lesArticles.length; i++) {
    //j'ecoute l'evenement click sur les articles et je lance la fonction vert
    lesArticles[i].addEventListener("mousedown", function () {
        for (let i = 0; i < lesArticles.length; i++) {
            lesArticles[i].style.color = "blue";
        }
    });
}