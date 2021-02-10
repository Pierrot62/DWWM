function verifEmail(e) {
    let verif = e.target
    let message = (verif.parentNode.parentNode).getElementsByClassName("erreur")[0];
    if (verif.value == '') {
        message.style.display = 'block';
        message.innerHTML = "champ manquant";
        val[0] = 0;
    } else if (!verif.checkValidity()) {
        verif.classList.add("incorrect");
        message.style.display = 'block';
        message.innerHTML = "format incorrect";
        val[0] = 0;
    } else {
        message.innerHTML = "";
        verif.classList.remove("incorrect");
        verif.classList.add("correct");
        message.style.display = 'block';
        val[0] = 1;
    }
    validerForm();
}

function verifiMdp(e) {
    let verif = e.target
    let message = (verif.parentNode.parentNode).getElementsByClassName("erreur")[0];
    if (verif.value != '') {
        message.innerHTML = "";
        verif.classList.remove("incorrect");
        verif.classList.add("correct");
        message.style.display = 'block';
        val[1] = 1;
    } 
    else 
    {
        message.style.display = 'block';
        message.innerHTML = "champ manquant";
        val[1] = 0;
        
    }
    validerForm();
}

function validerForm() {
    valider.disabled = true
    if (val[0] == 1 && val[1] == 1) {
        valide = true;
        valider.disabled = false;
    }
}

var val = [];
var email = document.querySelector('#email');
var mdp = document.querySelector('#motDePasse');
var valider = document.getElementById('valide');

email.addEventListener('input', verifEmail);
mdp.addEventListener('input', verifiMdp);