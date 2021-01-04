var inputName = document.getElementById("nom");
var inputDdn = document.getElementById("ddn");
var inputCp = document.getElementById("cp");

var spanNom = document.getElementById("spanNom");
// var spanNom = document.getElementById("spanNom");
var spanCp = document.getElementById("spanCp");

inputName.addEventListener('keyup', verifNom)
inputDdn.addEventListener('keyup', verifDdn)
inputCp.addEventListener('keyup', verifCp)


function verifNom() {
    let content = inputName.value;
    let lettre = content.charAt(content.length - 1);

    if (!isNaN(lettre)) {
        inputName.value = inputName.value.slice(0, -1);
        spanNom.textContent = 'UNIQUEMENT DES LETTRES !';
    } else {
        spanNom.textContent = ' ';
    }
}

function verifDdn() {

}

function verifCp() {
    let content = inputCp.value;
    let lettre = content.charAt(content.length - 1);

    if (isNaN(lettre)) {
        inputCp.value = inputCp.value.slice(0, -1);
        spanCp.textContent = 'UNIQUEMENT DES CHIFFRES !';
    }else if(content.length > 5){
        inputCp.value = inputCp.value.slice(0, -1);
        spanCp.textContent = '5 chiffre attendu uniquement !'
    }
    else {
        spanCp.textContent = ' ';
    }
}

    // var tabDdn = inputDdn.value;
    // var tabCp = inputCp.value;