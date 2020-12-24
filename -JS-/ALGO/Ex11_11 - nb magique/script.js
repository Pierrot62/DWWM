var magique = parseInt(Math.random()*100);

do{

    var nb = parseInt(prompt("Entree un nombre :"));

    if(nb < magique){
        alert("Plus Grand !")
    }else if(nb > magique){
        alert("Plus Petit !")
    }else{
        alert("BRAVO !")
    }

}while(nb >= magique || nb <= magique)

