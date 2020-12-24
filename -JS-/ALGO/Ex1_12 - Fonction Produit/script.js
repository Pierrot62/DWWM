var nb1 = parseInt(prompt("nb 1 :"))
var nb2 = parseInt(prompt("nb 2 :"))
var img = prompt("url de l'image")

function produit (nb1,nb2){

    result = nb1 * nb2;
    return result
}

function produit (img){

    return document.write("<img src=\""+img+"\">");

}

console.log(produit(nb1,nb2));
document.write(produit(img))