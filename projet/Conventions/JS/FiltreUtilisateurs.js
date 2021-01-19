var role=document.getElementsByClassName("role");
var admin=document.getElementById("admin");
var form=document.getElementById("form");
var stag=document.getElementById("stag");
var tut=document.getElementById("tut");
var tous=document.getElementById("tous");
// for (let i = 0; i < role.length; i++) {
//     alert(role[i].textContent) 
// }
// alert(role.textContent)
admin.addEventListener("click",Administration)
form.addEventListener("click",Formateur)
stag.addEventListener("click",Stagiaire)
tut.addEventListener("click",Tuteur)
tous.addEventListener("click",Tous)

function Formateur()
{reset()
    for (let i = 0; i < role.length; i++) {
        if (role[i].textContent!="Formateur") {
            role[i].parentNode.parentNode.style.display="none"
        }
    }
}
function Administration()
{reset()
    for (let i = 0; i < role.length; i++) {
        if (role[i].textContent!="Administration") {
            role[i].parentNode.parentNode.style.display="none"
        }
    }
}
function Stagiaire()
{reset()
    for (let i = 0; i < role.length; i++) {
        if (role[i].textContent!="Stagiaire") {
            role[i].parentNode.parentNode.style.display="none"
        }
    }
}
function Tuteur()
{reset()
    for (let i = 0; i < role.length; i++) {
        if (role[i].textContent!="Tuteur") {
            role[i].parentNode.parentNode.style.display="none"
        }
    }
}
function Tous()
{
    for (let i = 0; i < role.length; i++) {
            role[i].parentNode.parentNode.style.display="flex"
    }
}
function reset()
{
    for (let i = 0; i < role.length; i++) {
            role[i].parentNode.parentNode.style.display="flex" 
    }
}