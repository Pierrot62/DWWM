var nb1 = parseInt(prompt("Nombre n°1 : "));
var nb2 = parseInt(prompt("Nombre n°2 : "));
var op = prompt("Operateur : ");

if (nb1 == 0 && op == "/" || nb2 == 0 && op == "/") {
    alert("Division par zero");
}

switch (op)
{
    case "+" :
        var result = nb1 + nb2;
        break;

    case "-" :
        var result = nb1 - nb2;  
        break;

    case "*" :
        var result = nb1 * nb2; 
        break;

    case "/" :
        var result = nb1 / nb2;
        break;
    
    default :
        console.log("Operateur inconnue :");
        break;

}

console.log(result);