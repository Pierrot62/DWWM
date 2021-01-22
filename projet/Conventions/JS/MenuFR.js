var listeElmMenu = document.getElementsByClassName("elmMenu");

var url = new URL(document.location);

var page = url.searchParams.get("page");

switch (page) {
    case "FormFRStagiaire":
        listeElmMenu[0].setAttribute("class","actif");
        break;

    default:
        break;
}