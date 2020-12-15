var image = document.getElementById("image");
var url = image.getAttribute("src");
console.log(url);

image.addEventListener("click", retournement)

function retournement() {
    var retoune = document.getElementById
    if (url == "recto.png") {

        image.setAttribute("src", "verso.png");

    } else if (url == "verso.png") {

        image.setAttribute("src", "recto.png");

    }
}
