
function verifDateDebut(e) {// cette fonction verifie que la date de fin n est pas superieure a la date de debut
    let dateFin = e.target;
    let dateDebut = dateFin.parentNode.parentNode.getElementsByClassName('dateDebutPAE')[0];
    let message = (dateFin.parentNode).getElementsByClassName("erreur")[0];
    if (dateFin.value < dateDebut.value) {
        message.innerHTML = "date incorrecte";
        message.style.display = 'block';
        dateFin.style.border = "2px solid red";
    }
    else
    {
        message.innerHTML = "";
        dateFin.style.border = "2px solid green";
        message.style.display = 'block';
    }
}

function verifDateRapport(e) {
    let dateRapport = e.target.value;
    console.log(e.target)
    let dateFin = e.target.parentNode.parentNode.children[0].children[2].children[1].value;
    let message = (e.target.parentNode).getElementsByClassName("erreur")[0];
    if (dateFin < dateRapport) {
        message.innerHTML = "date incorrecte";
        message.style.display = 'block';
        e.target.style.border = "2px solid red";
    }
    else
    {
        message.innerHTML = "";
        e.target.style.border = "2px solid green";
        message.style.display = 'block';
    }
}

function ajoutDateRapport(e)
{
    let dateFinInput = e.target;
    let dateRapportInput = e.target.parentNode.parentNode.parentNode.children[1].children[1];
    let dateFin = new Date(dateFinInput.value);

    let dateRapport = new Date(dateFin);
    dateRapport.setDate(dateRapport.getDate()-15);

    dateRapportInput.value = dateRapport.toLocaleDateString('en-CA');
}                                                                                          
                                                                                                                               
var ajoutP = document.querySelector('#ajout1p');                                                  

ajoutP.addEventListener('click', function(){
var form = document.querySelector('form');

form.action +='&perSup=ok'
});

var listeDateFin = document.getElementsByClassName('dateFinPAE');

for (let i = 0; i < listeDateFin.length; i++) {
    listeDateFin[i].addEventListener('input', verifDateDebut);
    listeDateFin[i].addEventListener('input', ajoutDateRapport);
}

var listeDateRapport = document.getElementsByClassName('dateRapportSuivi');

for (let i = 0; i < listeDateRapport.length; i++) {
    listeDateRapport[i].addEventListener('input', verifDateRapport);
}
