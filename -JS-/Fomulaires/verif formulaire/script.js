var inputName = document.getElementById("nom");
var inputDdn = document.getElementById("ddn");
var inputCp = document.getElementById("cp");
var button = document.getElementById("button");
var spaninfo = document.getElementById("info")

var spanNom = document.getElementById("spanNom");
var spanDdn = document.getElementById("spanNom");
var spanCp = document.getElementById("spanCp");

inputName.addEventListener("keyup", verifNom);
inputDdn.addEventListener("change", verifDdn);
inputCp.addEventListener("keyup", verifCp);

var compteurVerif = 0;

function verifNom() {
  let content = inputName.value;
  let lettre = content.charAt(content.length - 1);

  if (!isNaN(lettre)) {
    inputName.value = inputName.value.slice(0, -1);
    inputName.style.border = "5px solid red";
    spaninfo.textContent = "Erreur : le nom ne peut comporter que des lettres.";
  } else if (content.length < 3) {
    inputName.style.border = "5px solid orange";
    spaninfo.textContent = "Erreur : le nom doit contenir au moins 3 lettres.";
  } else {
    inputName.style.border = "5px solid green";
    spaninfo.textContent = "";
    compteurVerif++;
    activButton(compteurVerif);
  }
}

function verifDdn() {
  let dateUser = inputDdn.value;
  let jour = parseInt(dateUser.substring(8, 10));
  let mois = parseInt(dateUser.substring(5, 7));
  let année = parseInt(dateUser.substring(0, 4));

  let date = new Date(année, mois - 1, jour);
  let dateSysteme = new Date();
  if (date > dateSysteme) {
    inputDdn.style.border = "5px solid red";
    spaninfo.textContent = "Erreur : la date de naissance ne peux pas être supérieur a la date actuelle.";
  } else {
    inputDdn.style.border = "5px solid green";
    spaninfo.textContent = "";
    compteurVerif++;
    activButton(compteurVerif);
  }
}

function verifCp() {
  let content = inputCp.value;
  let lettre = content.charAt(content.length - 1);

  if (isNaN(lettre)) {
    inputCp.value = inputCp.value.slice(0, -1);
    inputCp.style.border = "5px solid red";
    spaninfo.textContent = "Erreur : le code postal ne peut contenir que des chiffres.";
  } else if (content.length > 5) {
    inputCp.value = inputCp.value.slice(0, -1);
  } else if (content.length < 5) {
    inputCp.style.border = "5px solid orange";
  } else {
    inputCp.style.border = "5px solid green";
    spaninfo.textContent = "";
    compteurVerif++;
    activButton(compteurVerif);
  }
}

function activButton(compteurVerif) {
  if (compteurVerif == 3) {
    button.style.opacity = "1";
    button.removeAttribute("disabled", "");
  } else {
    
  }
}
