var pu = parseInt(prompt("Prix unitaire du produit : "));
var qtecom = parseInt(prompt("Quantite commander : "));
var tot = pu * qtecom;

if (tot >= 500) {

    port = 0;

} else {

    port = tot * 0.02;

    if (port < 6) {

        port = 6;
    }
}

if (tot >= 100 && tot <= 200) {

    rem = tot * 0.05;

} else if (tot > 200) {

    rem = tot * 0.1;

}

pap = tot + port - rem;
alert(pap);