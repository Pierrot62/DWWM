  
var tableau = ["pierre", "paul", "coco","toto"];

var index = prompt("prenom a trouver :  ");
    var prenom = tableau.indexOf(index);
    tableau.splice(prenom, 1);
    tableau.push("");
    console.log(tableau);