//CA MARCHE POS
// alert("<h1>Salut les gars ! <strong> VIVE MACDO </strong></h1>");
//CA MARCHE
// document.write("<h1>SALUT LES GARS !</h1>");

var note1 = parseInt(prompt("note 1 :"));
var note2 = parseInt(prompt("note 2 :"));

var moyenne = (note1 + note2) / 2 ;

console.log("notes : " + note1 + " et " + note2)
console.log("la moyenne est de : " + moyenne);

if (note1 > note2) {
    console.log("La note 1 est plus grande que la note 2");

}else if (note2 > note1) {
    console.log("la note 2 est plus grande que la note 1");
}else {
    console.log("les deux notes sont identique !");
}

for (let i = 0; i <= 10; i++) {

    console.log("i = "+i)
    
}