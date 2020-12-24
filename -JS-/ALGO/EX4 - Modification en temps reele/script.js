var quantite1 = document.getElementById("quantite1");
var prix1 = document.getElementById("prix1");
var quantite2 = document.getElementById("quantite2");
var prix2 = document.getElementById("prix2");


quantite1.addEventListener("change", function () {
    let tt = parseInt(quantite1.value) * parseInt(prix1.value);
    console.log(tt);
    document.getElementById("total1").value = tt;
});
prix1.addEventListener("change", function () {
    let tt = parseInt(quantite1.value) * parseInt(prix1.value);
    console.log(tt);
    document.getElementById("total1").value = tt;
});

quantite2.addEventListener("change", function () {
    let tt = parseInt(quantite2.value) * parseInt(prix2.value);
    console.log(tt);
    document.getElementById("total2").value = tt;
});
prix2.addEventListener("change", function () {
    let tt = parseInt(quantite2.value) * parseInt(prix2.value);
    console.log(tt);
    document.getElementById("total2").value = tt;
});
