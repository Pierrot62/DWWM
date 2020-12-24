var text = prompt("Entre du texte : ");
console.log(text.length);
nb = text.length;
lettre = " ";
cpt = 0;
for ( i = 0; i < nb; i++){

    lettre = text.substr(i,1);

    if(lettre == "a" || lettre == "e" || lettre == "i" || lettre == "o" || lettre == "u" ){
        cpt++;
    }

}
console.log("Il y a "+cpt+" voyelle");