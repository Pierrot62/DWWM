var i = 0;
var somme = 0;
var min = parseInt(prompt("Entrez un entier : "));
var max = min;

do {

    nb = parseInt(prompt("Entrez un entier : "));
    if (nb != 0) {
        somme = somme + nb;
        i++;
        if (nb > max) {
            max = nb;
        }
        if (nb < min) {
            min = nb;
        }
        if (nb > max) {
            max = nb;
        }
    
    }


} while (nb != " ");

var moyenne = somme / i;
console.log("Valeur minimal : " + min);
console.log("Valeur maximal : " + max);
console.log(moyenne);