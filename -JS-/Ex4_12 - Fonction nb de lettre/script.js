var text = prompt("text :")
var recherche = prompt("lettre rechercher :")
var cpt = 0
document.write(list(text,recherche));

function list(text, recherche) {
 

    for (i = 0; i < text.length; i++) {

        lettre = text.substr(i, 1);

        if (lettre == recherche) {
            cpt++;
        }

    }
    return cpt;

}

