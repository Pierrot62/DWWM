var jeune = 0
var moyen = 0
var vieux = 0

do{

    var age = parseInt(prompt("Entre un age : "));

    if(age < 20){
        jeune++;
    }else if(age >20 && age < 40){
        moyen++
    }else{
        vieux++
    }

}while(age != 100)

console.log("Il y a "+jeune+" jeune");
console.log("Il y a "+moyen+" moyen");
console.log("Il y a "+vieux+" vieux");