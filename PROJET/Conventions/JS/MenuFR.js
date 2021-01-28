var url = document.location.href;
tab = ["Stagiaire", "Entreprise", "Condition", "Sujet", "Evaluation"];
for (let i = 0; i < tab.length; i++) {
    if (url.indexOf(tab[i]) != -1) {
        document.getElementById(tab[i]).classList.add("ongletSelect");
    }
}