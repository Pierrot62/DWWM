var i = 0;
var somme = 0;
var max = 0;
var min = 0;

do {

    nb = parseInt(prompt("Entrez un entier : "));
    if (nb != 0) {
        somme = somme + nb;
        i++;
        min = nb;
        if (nb > max) {
            max = nb;
        }
        if (nb < min) {
            min = nb;
        }
    }


} while (nb != " ");

var moyenne = somme / i;
console.log("Valeur minimal : " + min);
console.log("Valeur maximal : " + max);
console.log(moyenne);
