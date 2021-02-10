var select = document.getElementsByTagName("select")[0];
select.addEventListener("input", inputSelect);
function inputSelect(e)
{
    result="";
    valeurs = select.selectedOptions;
    for (let i = 0; i < valeurs.length; i++) {
        result += valeurs[i].value + ","
    }
    
    document.getElementsByName("utilisateur")[0].value=result;
}