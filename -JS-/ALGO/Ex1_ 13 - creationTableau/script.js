var nb = parseInt(prompt("Entrer un nombre :"))
var tableau = Array(nb);

for(i=0 ; i < nb ; i++) {

    tableau[i] = prompt("Valeur n"+i)

}

for (var valeur in tableau ){

    console.log("Valeur : "+tableau[valeur])

}