var monRange = document.getElementsByTagName('input')[0];
monRange.addEventListener("change", function () {
    changeCouleur(monRange.value);
});
maCouleur = readCookie("couleur");
changeCouleur(maCouleur);

function changeCouleur(maValeur) {
    if (maValeur == 2) {
        nouvClass = "dark";
        monRange.value = 2;
    } else {
        nouvClass = "light";
        monRange.value = 1;
    }

    mesParagraphes = document.getElementsByClassName("paragraphe");
    for (let i = 0; i < mesParagraphes.length; i++) {
        mesParagraphes[i].setAttribute("class", "paragraphe " + nouvClass);
    }
    document.body.setAttribute("class", nouvClass);
    createCookie("couleur", monRange.value, 5);
}


function createCookie(name, value, days) {
    // permet de créer un cookie
    if (days) {
        // si le nombre de jour est renseigné, on le transforme en millieme de seconde
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "expires=" + date.toGMTString();
    } else var expires = "";
    //le cookie doit contenir  clé=valeur;expires=temps;path=nomDomaine
    document.cookie = name + "=" + value + "; " + expires + "; path=/";
}

function readCookie(name) {
    // on récupère tous les cookies du site en une fois, séparé par ; 
    // on range dans un tableau chaque cookie
    var listeCookies = document.cookie.split('; ');
    for (let i = 0; i < listeCookies.length; i++) {
        // pour chaque cookie, on sépare en tableau la clé et la valeur
        var unCookie = listeCookies[i].split("=");
        // si la clé correspond au cookie cherché, on renvoi la valeur
        if (unCookie[0] == name) return unCookie[1];
    }
    return null;
}

function eraseCookie(name) {
    // pour supprimer un cookie, on le périme
    createCookie(name, "", -1);
}