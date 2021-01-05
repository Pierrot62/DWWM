var inputName = document.getElementById("nom");
var inputDdn = document.getElementById("ddn");
var inputCp = document.getElementById("cp");
var button = document.getElementById("button");
var spaninfo = document.getElementById("info");

var checkInput = document.getElementsByClassName("checkInput");
console.log(checkInput);
var spanNom = document.getElementById("spanNom");
var spanDdn = document.getElementById("spanNom");
var spanCp = document.getElementById("spanCp");

inputName.addEventListener("keyup", verifNom);
inputDdn.addEventListener("change", verifDdn);
inputCp.addEventListener("keyup", verifCp);

var verif1 = false;
var verif2 = false;
var verif3 = false;


function verifNom() {
    let content = inputName.value;
  //   let lettre = content.charAt(content.length - 1);

    if (!checkInput[0].checkValidity()) {
      inputName.value = inputName.value.slice(0, -1);
      inputName.style.border = "5px solid red";
      spaninfo.textContent = "Erreur : le nom ne peut comporter que des lettres.";
      verif1 = false;
    } else if (content.length < 3) {
      inputName.style.border = "5px solid orange";
      spaninfo.textContent = "Erreur : le nom doit contenir au moins 3 lettres.";
      verif1 = false;
    } else {
      inputName.style.border = "5px solid green";
      spaninfo.textContent = "";
      verif1 = true;
    }
    activButton(verif1, verif2 ,verif3);
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
      verif2 = false;
    } else {
      inputDdn.style.border = "5px solid green";
      spaninfo.textContent = "";
      verif2 = true;
    }
    activButton(verif1, verif2 ,verif3);
  
  }
  
  function verifCp() {
    let content = inputCp.value;
    console.log(content);
    if (!checkInput[2].checkValidity()) {
      inputCp.value = inputCp.value.slice(0, -1);
      inputCp.style.border = "5px solid red";
      spaninfo.textContent = "Erreur : le code postal ne peut contenir que des chiffres.";
      verif3 = false;
    } else if (content.length > 5) {
      inputCp.value = inputCp.value.slice(0, -1);
      spaninfo.textContent = "Erreur : le code postal ne peut contenir que 5 chiffres.";
      verif3 = false;
    } else if (content.length < 5) {
      inputCp.style.border = "5px solid orange";
      spaninfo.textContent = "Erreur : le code postal doit contenir 5 chiffres.";    
      verif3 = false;
    } else {
      inputCp.style.border = "5px solid green";
      spaninfo.textContent = "";
      verif3 = true;
    }
    activButton(verif1, verif2 ,verif3);
  }

// function verifNom() {
//   let content = inputName.value;
// //   let lettre = content.charAt(content.length - 1);
//   let filtre = new RegExp("^[a-zA-Z- ]+$");

//   if (filtre.test(content) == false) {
//     inputName.value = inputName.value.slice(0, -1);
//     inputName.style.border = "5px solid red";
//     spaninfo.textContent = "Erreur : le nom ne peut comporter que des lettres.";
//     verif1 = false;
//   } else if (content.length < 3) {
//     inputName.style.border = "5px solid orange";
//     spaninfo.textContent = "Erreur : le nom doit contenir au moins 3 lettres.";
//     verif1 = false;
//   } else {
//     inputName.style.border = "5px solid green";
//     spaninfo.textContent = "";
//     verif1 = true;
//   }
//   activButton(verif1, verif2 ,verif3);

// }

// function verifDdn() {
//   let dateUser = inputDdn.value;
//   let jour = parseInt(dateUser.substring(8, 10));
//   let mois = parseInt(dateUser.substring(5, 7));
//   let année = parseInt(dateUser.substring(0, 4));
//   let date = new Date(année, mois - 1, jour);
//   let dateSysteme = new Date();

//   if (date > dateSysteme) {
//     inputDdn.style.border = "5px solid red";
//     spaninfo.textContent = "Erreur : la date de naissance ne peux pas être supérieur a la date actuelle.";
//     verif2 = false;
//   } else {
//     inputDdn.style.border = "5px solid green";
//     spaninfo.textContent = "";
//     verif2 = true;
//   }
//   activButton(verif1, verif2 ,verif3);

// }

// function verifCp() {
//   let content = inputCp.value;
//   let lettre = content.charAt(content.length - 1);
  

//   if (isNaN(lettre)) {
//     inputCp.value = inputCp.value.slice(0, -1);
//     inputCp.style.border = "5px solid red";
//     spaninfo.textContent = "Erreur : le code postal ne peut contenir que des chiffres.";
//     verif3 = false;
//   } else if (content.length > 5) {
//     inputCp.value = inputCp.value.slice(0, -1);
//     spaninfo.textContent = "Erreur : le code postal ne peut contenir que 5 chiffres.";
//     verif3 = false;
//   } else if (content.length < 5) {
//     inputCp.style.border = "5px solid orange";
//     spaninfo.textContent = "Erreur : le code postal doit contenir 5 chiffres.";    
//     verif3 = false;
//   } else {
//     inputCp.style.border = "5px solid green";
//     spaninfo.textContent = "";
//     verif3 = true;
//   }
//   activButton(verif1, verif2 ,verif3);
// }

function activButton(verif1, verif2, verif3) {
  if (verif1 == true && verif2 == true && verif3 == true) {
    button.style.opacity = "1";
    button.removeAttribute("disabled", "");
  } else {
    button.style.opacity = "0.5";
    button.setAttribute("disabled", "");
  }
}
