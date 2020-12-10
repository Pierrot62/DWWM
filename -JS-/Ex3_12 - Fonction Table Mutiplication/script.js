var nb = parseInt(prompt("nb 1 :"))

function table(nb) {

    for( i = 1; i <= 10; i++){
        console.log(nb+" x "+i+" = "+(i*nb));
    }
}
console.log(table(nb));