alert("COUCOU")

var listDiv = document.getElementsByTagName("div");
var buttonn = document.querySelector("button")

for (let i = 0; i < listDiv.length; i++) {
   listDiv[i].style.color = "blue" 

}
    button.addEventListener("click", changerCouleur)

    function changerCouleur () {

        for (let i = 0; i < listDiv.length; i++) {
    
            if (listDiv[i].style.color == "blue") {
    
                var color = "white";
    
            } else if (listDiv[i].style.color == "white") {
    
                var color = "red";
    
            } else if (listDiv[i].style.color == "red") {
    
                var color = "blue";
    
            } else {
    
                var color = "blue";
    
            }
    
            listDiv[i].style.color = color;
    
        }
    }











//     buttonn.addEventListener("click", function () {
//         alert("Button Activer");
//    })

// for (let i = 0; i < titre.length; i++) {
//     titre[i].addEventListener("click", function () {

//         for (let i = 0; i < titre.length; i++) {
//             if (titre[i].style.color == "black") {
//                 titre[i].style.color = "red";

//             } else if (titre[i].style.color == "blue") {
//                 titre[i].style.color = "blue";
//             } else if (titre[i].style.color == "whrite") {
//                 titre[i].style.color = "whrite";
//             } else if (titre[i].style.color == "red") {
//                 titre[i].style.color = "red";
//             }
//         }
//     })
// }

