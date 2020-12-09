var i = 0;
var somme = 0;

do {

    nb = parseInt(prompt("Entrez un entier : "));
    if (nb != 0){
        somme = somme + nb;
        i++;
    }
    

} while (nb != " ");

var moyenne = somme / i;
console.log(moyenne);


