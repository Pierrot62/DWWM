var annee = prompt("Annee de naisssance de l'utilisateur : ");
var age = (2020 - annee);
if (age >= 18) {
    console.log("Vous etes majeur ! votre age est : "+age);
}else{
    console.log("Vous etes mineur ! votre age est : "+age);
}

