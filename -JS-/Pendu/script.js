/**
 * Affiche le tableau entré en paramètre
 * et sépare les lettres par des espaces.
 *
 * @param   array   $tab    Tableau contentant une lettre par case.
 *
 * @return  void            Affiche le mot.
 */

function afficherTableau(tab) {
    let elm = "";
    for (elm in tab){
        document.write(tab[elm] + " ");
    }
    document.write("<br>");
}
/**
 * méthode qui prend un mot en paramètre d'entrée et qui renvoi un tableau de caractères contenant autant de case que de lettres dans le mot.
 * si Niveau =1 les cases du milieu contiennent des _, les 1eres et dernières lettres restent apparantes
 * sinon Chacune de ces cases contient un _
 *
 * @param string $mot
 * @param int $niveau   //niveau de difficulté
 * @return void array
 */

function coderMot(mot,niveau) {
    let tab = mot.split("");
    if (niveau == 1) {
        for (let i = 0; i < tab.length - 1 ; i++) {

            tab[i].push("_");
            
        }
    }else{
        for (let i = 0; i < tab.length; i++) {

            tab[i].push("_");
            
        }
    }
    return tab;
}

function creer_dico()
{
    //Cree le dictionnaire de mots
    let tabMots = ["AEROPORT"
    ,"AFFAIRE"
    ,"ALBUM"
    ,"ALPHABET"
    ,"AMENER"
    ,"AMPOULE"
    ,"ANCIEN"
    ,"ANORAK"
    ,"ANTENNE"
    ,"APPAREIL"
    ,"APPORTER"
    ,"APPUYER"
    ,"APRES"
    ,"ARC"
    ,"ARMOIRE"
    ,"ARRET"
    ,"ARRIERE"
    ,"ARRIVER"
    ,"ARROSER"
    ,"ASSIETTE"
    ,"ASSIS"
    ,"ATTACHER"
    ,"ATTENDRE"
    ,"ATTENTION"
    ,"ATTERRIR"
    ,"ATTRAPER"
    ,"AU"
    ,"AUTANT"
    ,"AUTO"
    ,"AUTOMOBILISTE"
    ,"AUTORADIO"
    ,"AUTOUR"
    ,"AVANCER"
    ,"AVANT"
    ,"AVEC"
    ,"AVION"
    ,"BAGAGE"
    ,"BAGUETTE"
    ,"BAIGNER"
    ,"BÂILLER"
    ,"BALLE"
    ,"BANC"
    ,"BARBE"
    ,"BARBOTER"
    ,"BARQUE"
    ,"BARRE"
    ,"BARREAU"
    ,"BAS"
    ,"BATEAU"
    ,"BEAUCOUP"
    ,"BIBLIOTHEQUE"
    ,"BLANC"
    ,"BLEU"
    ,"BOIS"
    ,"BOITE"
    ,"BONDIR"
    ,"BONNET"
    ,"BORD"
    ,"BOSSER"
    ,"BOTTE"
    ,"BOUCHER"
    ,"BOUCHON"
    ,"BOUDER"
    ,"BOUGER"
    ,"BOUSCULER"
    ,"BOUT"
    ,"BOUTEILLE"
    ,"BOUTON"
    ,"BRAS"
    ,"BRETELLE"
    ,"BRICOLAGE"
    ,"BRUIT"
    ,"BRUN"
    ,"BULLES"
    ,"BUREAU"
    ,"CABANE"
    ,"CABINET"
    ,"CAGOULE"
    ,"CAHIER"
    ,"CAISSE"
    ,"CALME"
    ,"CAMARADE"
    ,"CAMESCOPE"
    ,"CAMION"
    ,"CANARD"
    ,"CARNET"
    ,"CARREAU"
    ,"CARTABLE"
    ,"CARTON"
    ,"CASIER"
    ,"CASQUE"
    ,"CASQUETTE"
    ,"CASSE"
    ,"CASSER"
    ,"CASSEROLE"
    ,"CASSETTE"
    ,"CATALOGUE"
    ,"CEDE"
    ,"CEDEROM"
    ,"CEINTURE"
    ,"CERCEAU"
    ,"CHAINE"
    ,"CHAISE"
    ,"CHAISES"
    ,"CHANSON"
    ,"CHAPEAU"
    ,"CHARGER"
    ,"CHAT"
    ,"CHAUD"
    ,"CHAUSSETTE"
    ,"CHAUSSON"
    ,"CHAUSSURE"
    ,"CHEMISE"
    ,"CHERCHER"
    ,"CHEVILLE"
    ,"CHIFFRE"
    ,"CHOISIR"
    ,"CHOSE"
    ,"CHUCHOTER"
    ,"CHUTE"
    ,"CIGARETTE"
    ,"CINQ"
    ,"CISEAUX"
    ,"CLASSE"
    ,"CLAVIER"
    ,"CLE"
    ,"CLOU"
    ,"COIN"
    ,"COL"
    ,"COLERE"
    ,"COLLANT"
    ,"COLLE"
    ,"COLLER"
    ,"COLORIAGE"
    ,"COLORIER"
    ,"COMMENCER"
    ,"COMPARER"
    ,"COMPTER"
    ,"CONDUIRE"
    ,"CONSTRUIRE"
    ,"CONTE"
    ,"CONTINUER"
    ,"CONTRAIRE"
    ,"CONTRE"
    ,"COPAIN"
    ,"COPIER"
    ,"COQUILLAGE"
    ,"COQUILLETTE"
    ,"COQUIN"
    ,"CORDE"
    ,"CORPS"
    ,"COTE"
    ,"COU"
    ,"COUCHE"
    ,"COUDE"
    ,"COUDRE"
    ,"COULEUR"
    ,"COULOIR"
    ,"COUPER"
    ,"COURIR"
    ,"COURONNE"
    ,"COURT"
    ,"CRAIE"
    ,"CRAVATE"
    ,"CROCHET"
    ,"CROISSANT"
    ,"CUBE"
    ,"CUILLERE"
    ,"CUISSE"
    ,"CULOTTE"
    ,"CURIEUX"
    ,"CUVETTE"
    ,"DAME"
    ,"DANGER"
    ,"DANS"
    ,"DANSER"
    ,"DE"
    ,"DEBORDER"
    ,"DEBOUT"
    ,"DECHIRER"
    ,"DECOLLER"
    ,"DECORER"
    ,"DECOUPAGE"
    ,"DECOUPER"
    ,"DEDANS"
    ,"DEFENDRE"
    ,"DEHORS"
    ,"DELTAPLANE"
    ,"DEMANDER"
    ,"DEMARRER"
    ,"DEMOLIR"
    ,"DEPASSER"
    ,"DERNIER"
    ,"DERRIERE"
    ,"DESCENDRE"
    ,"DESOBEIR"
    ,"DESSIN"
    ,"DESSINER"
    ,"DETRUIRE"
    ,"DEUX"
    ,"DEUXIEME"
    ,"DEVANT"
    ,"DICTIONNAIRE"
    ,"DIFFERENCE"
    ,"DIFFERENT"
    ,"DIFFICILE"
    ,"DIRE"
    ,"DIRECTEUR"
    ,"DIRECTRICE"
    ,"DISCUTER"
    ,"DISPARAITRE"
    ,"DISTRIBUER"
    ,"DIX"
    ,"DOIGT"
    ,"DOIGTS"
    ,"DOMINO"
    ,"DONNER"
    ,"DORMIR"
    ,"DOS"
    ,"DOSSIER"
    ,"DOUCHE"
    ,"DOUCHER"
    ,"DOUX"
    ,"DROIT"
    ,"DU"
    ,"DUR"
    ,"EAU"
    ,"ECARTER"
    ,"ECHANGER"
    ,"ECHARPE"
    ,"ECHASSES"
    ,"ECHELLE"
    ,"ECLABOUSSER"
    ,"ECLAIRER"
    ,"ECOLE"
    ,"ECOUTER"
    ,"ECRAN"
    ,"ECRASER"
    ,"ECRIRE"
    ,"ECRITURE"
    ,"EFFACER"
    ,"EFFORT"
    ,"ELASTIQUE"
    ,"ELECTRICITE"
    ,"ELEVE"
    ,"EMMENER"
    ,"EMPORTER"
    ,"ENCORE"
    ,"ENERVE"
    ,"ENFANT"
    ,"ENFILER"
    ,"ENFONCER"
    ,"ENGIN"
    ,"ENLEVER"
    ,"ENTENDRE"
    ,"ENTONNOIR"
    ,"ENTOURER"
    ,"ENTREE"
    ,"ENTRER"
    ,"ENVELOPPE"
    ,"ENVOYER"
    ,"EPAIS"
    ,"EPAULE"
    ,"EPEE"
    ,"EQUIPE"
    ,"ESCABEAU"
    ,"ESCALADER"
    ,"ESCALIER"
    ,"ESCARGOT"
    ,"ESCARPIN"
    ,"ESSUYER"
    ,"ETAGERE"
    ,"ETANG"
    ,"ETIQUETTE"
    ,"ETROIT"
    ,"ETUDE"
    ,"ETUDIER"
    ,"EXPLIQUER"
    ,"EXTERIEUR"
    ,"FABRIQUER"
    ,"FACILE"
    ,"FAIRE"
    ,"FATIGUE"
    ,"FAUTE"
    ,"FAUTEUIL"
    ,"FEE"
    ,"FENETRE"
    ,"FERMER"
    ,"FESSE"
    ,"FEU"
    ,"FEUILLE"
    ,"FEUTRE"
    ,"FICELLE"
    ,"FIL"
    ,"FILET"
    ,"FILLE"
    ,"FILM"
    ,"FINIR"
    ,"FLECHE"
    ,"FLEUR"
    ,"FLOTTER"
    ,"FOIS"
    ,"FONCE"
    ,"FOND"
    ,"FOOTBALL"
    ,"FORT"
    ,"FOUILLER"
    ,"FRAPPER"
    ,"FREIN"
    ,"FROID"
    ,"FUSEE"
    ,"FUSIL"
    ,"GAGNER"
    ,"GANT"
    ,"GARAGE"
    ,"GARÇON"
    ,"GARDER"
    ,"GARDIEN"
    ,"GARE"
    ,"GAUCHE"
    ,"GENER"
    ,"GENOU"
    ,"GENTIL"
    ,"GLISSER"
    ,"GOLF"
    ,"GOMME"
    ,"GONFLER"
    ,"GOUTER"
    ,"GOUTTES"
    ,"GRAND"
    ,"GRIMPER"
    ,"GRIS"
    ,"GRONDER"
    ,"GROS"
    ,"GROUPE"
    ,"GRUE"
    ,"GYMNASTIQUE"
    ,"HABIT"
    ,"HANCHE"
    ,"HANDICAPE"
    ,"HAUT"
    ,"HELICOPTERE"
    ,"HEXAGONE"
    ,"HISTOIRE"
    ,"HORLOGE"
    ,"HUIT"
    ,"HUMIDE"
    ,"IDEE"
    ,"ILE"
    ,"IMAGE"
    ,"IMITER"
    ,"IMMEUBLE"
    ,"IMMOBILE"
    ,"INONDER"
    ,"INSEPARABLE"
    ,"INSTRUMENT"
    ,"INTERESSANT"
    ,"INTERIEUR"
    ,"INTRUS"
    ,"JALOUX"
    ,"JAMBES"
    ,"JAUNE"
    ,"JEAN"
    ,"JEU"
    ,"JOLI"
    ,"JOUER"
    ,"JOUET"
    ,"JUPE"
    ,"LAC"
    ,"LACER"
    ,"LACET"
    ,"LAINE"
    ,"LAISSER"
    ,"LARGE"
    ,"LAVABO"
    ,"LAVER"
    ,"LECTURE"
    ,"LETTRE"
    ,"LIERRE"
    ,"LIGNE"
    ,"LINGE"
    ,"LIRE"
    ,"LISSE"
    ,"LISTE"
    ,"LIT"
    ,"LITRE"
    ,"LIVRE"
    ,"LOIN"
    ,"LONG"
    ,"LUMIERE"
    ,"LUNETTES"
    ,"MADAME"
    ,"MAGAZINE"
    ,"MAGICIEN"
    ,"MAGIE"
    ,"MAGNETOSCOPE"
    ,"MAILLOT"
    ,"MAIN"
    ,"MAINS"
    ,"MAISON"
    ,"MAITRE"
    ,"MAITRESSE"
    ,"MAL"
    ,"MALADROIT"
    ,"MANCHE"
    ,"MANQUER"
    ,"MANTEAU"
    ,"MARCHE"
    ,"MARIONNETTE"
    ,"MARTEAU"
    ,"MATELAS"
    ,"MATERNELLE"
    ,"MELANGER"
    ,"MEME"
    ,"MENSONGE"
    ,"MESURER"
    ,"METAL"
    ,"METRE"
    ,"METTRE"
    ,"MEUBLE"
    ,"MICRO"
    ,"MIEUX"
    ,"MILIEU"
    ,"MINE"
    ,"MODELE"
    ,"MOINS"
    ,"MONTAGNE"
    ,"MONTER"
    ,"MONTRER"
    ,"MORCEAU"
    ,"MOT"
    ,"MOTEUR"
    ,"MOTO"
    ,"MOUCHOIR"
    ,"MOUFLE"
    ,"MOUILLE"
    ,"MOUILLER"
    ,"MOULIN"
    ,"MOUSSE"
    ,"MOYEN"
    ,"MUET"
    ,"MULTICOLORE"
    ,"MUR"
    ,"MUSCLE"
    ,"MUSIQUE"
    ,"NAGER"
    ,"NENUPHAR"
    ,"NEUF"
    ,"NŒUD"
    ,"NOIR"
    ,"NOM"
    ,"NOMBRE"
    ,"NOUVEAU"
    ,"NU"
    ,"NUMERO"
    ,"OBEIR"
    ,"OBJET"
    ,"OBLIGER"
    ,"ONGLE"
    ,"ORCHESTRE"
    ,"ORDINATEUR"
    ,"ORDRE"
    ,"OURS"
    ,"OUTIL"
    ,"OUVRIR"
    ,"PAGE"
    ,"PAIRE"
    ,"PANNE"
    ,"PANTALON"
    ,"PAPIER"
    ,"PARACHUTE"
    ,"PARCOURS"
    ,"PAREIL"
    ,"PARKING"
    ,"PARLER"
    ,"PARTAGER"
    ,"PARTIR"
    ,"PAS"
    ,"PASSERELLE"
    ,"PATAUGER"
    ,"PEDALO"
    ,"PEINDRE"
    ,"PEINTURE"
    ,"PELUCHE"
    ,"PENTE"
    ,"PERCER"
    ,"PERDRE"
    ,"PERLE"
    ,"PERSONNE"
    ,"PETIT"
    ,"PEU"
    ,"PEUR"
    ,"PHOTO"
    ,"PIED"
    ,"PIEDS"
    ,"PILOTE"
    ,"PINCEAU"
    ,"PION"
    ,"PLACARD"
    ,"PLAFOND"
    ,"PLAGE"
    ,"PLANCHE"
    ,"PLÂTRE"
    ,"PLEUVOIR"
    ,"PLI"
    ,"PLIAGE"
    ,"PLIER"
    ,"PLONGEOIR"
    ,"PLONGER"
    ,"PLUIE"
    ,"PLUS"
    ,"PNEU"
    ,"POCHE"
    ,"POIGNET"
    ,"POING"
    ,"POINT"
    ,"POINTE"
    ,"POINTU"
    ,"POISSON"
    ,"POLI"
    ,"POMPIERS"
    ,"PONT"
    ,"PORTE"
    ,"PORTEMANTEAU"
    ,"PORTER"
    ,"POSER"
    ,"POSTER"
    ,"POT"
    ,"POUBELLE"
    ,"POUCE"
    ,"POUSSER"
    ,"POUVOIR"
    ,"PREMIER"
    ,"PRENDRE"
    ,"PRENOM"
    ,"PREPARER"
    ,"PRES"
    ,"PRESENT"
    ,"PRESQUE"
    ,"PRESSER"
    ,"PRETER"
    ,"PRINCE"
    ,"PRISES"
    ,"PRIVER"
    ,"PROMETTRE"
    ,"PROPRE"
    ,"PUNAISE"
    ,"PUNIR"
    ,"PUZZLE"
    ,"PYJAMA"
    ,"PYRAMIDE"
    ,"QUAI"
    ,"QUATRE"
    ,"QUESTION"
    ,"RACONTER"
    ,"RADIATEUR"
    ,"RADIO"
    ,"RAME"
    ,"RAMPE"
    ,"RAMPER"
    ,"RANGER"
    ,"RATER"
    ,"RAYURE"
    ,"RECEVOIR"
    ,"RECITER"
    ,"RECOMMENCER"
    ,"RECREATION"
    ,"RECULER"
    ,"REFUSER"
    ,"REGARDER"
    ,"REINE"
    ,"REMETTRE"
    ,"REMPLACER"
    ,"REMPLIR"
    ,"RENTREE"
    ,"RENTRER"
    ,"RENVERSER"
    ,"REPARER"
    ,"REPETER"
    ,"REPONDRE"
    ,"RESPIRER"
    ,"RESSEMBLER"
    ,"RESTER"
    ,"RETARD"
    ,"REUSSIR"
    ,"REVENIR"
    ,"RIDEAU"
    ,"ROBE"
    ,"ROBINET"
    ,"ROI"
    ,"ROND"
    ,"ROUE"
    ,"ROUGE"
    ,"ROULADE"
    ,"ROULER"
    ,"ROUX"
    ,"RUBAN"
    ,"RUGUEUX"
    ,"SAGE"
    ,"SALADIER"
    ,"SALE"
    ,"SALLE"
    ,"SAUT"
    ,"SAUTER"
    ,"SAVON"
    ,"SCIE"
    ,"SEAU"
    ,"SEC"
    ,"SECHER"
    ,"SEMELLE"
    ,"SENS"
    ,"SENTIR"
    ,"SEPARER"
    ,"SEPT"
    ,"SERIEUX"
    ,"SERPENT"
    ,"SERRE"
    ,"SERRER"
    ,"SERRURE"
    ,"SERVIETTE"
    ,"SERVIR"
    ,"SEUL"
    ,"SIEGE"
    ,"SIESTE"
    ,"SILENCE"
    ,"SIX"
    ,"SOL"
    ,"SOLDAT"
    ,"SOLIDE"
    ,"SOMMEIL"
    ,"SONNER"
    ,"SONNETTE"
    ,"SORCIERE"
    ,"SORTIE"
    ,"SORTIR"
    ,"SOUFFLER"
    ,"SOULEVER"
    ,"SOULIGNER"
    ,"SOUPLE"
    ,"SOURD"
    ,"SOURIRE"
    ,"SOUS"
    ,"SPAGHETTI"
    ,"SPORT"
    ,"STYLO"
    ,"SUIVANT"
    ,"SUIVRE"
    ,"SUR"
    ,"SURFEUR"
    ,"TABLE"
    ,"TABLEAU"
    ,"TABLIER"
    ,"TABOURET"
    ,"TACHE"
    ,"TAILLE"
    ,"TAILLER"
    ,"TALON"
    ,"TAMBOUR"
    ,"TAMPON"
    ,"TAPER"
    ,"TAPIS"
    ,"TARD"
    ,"TASSE"
    ,"TELECOMMANDE"
    ,"TELEPHONE"
    ,"TELEVISION"
    ,"TENDRE"
    ,"TENIR"
    ,"TENNIS"
    ,"TERMINER"
    ,"TETE"
    ,"TIRER"
    ,"TIROIR"
    ,"TISSU"
    ,"TITRE"
    ,"TOBOGGAN"
    ,"TOILETTE"
    ,"TOMBER"
    ,"TORDU"
    ,"TOT"
    ,"TOUCHER"
    ,"TOUR"
    ,"TOURNER"
    ,"TOURNEVIS"
    ,"TRAIN"
    ,"TRAIT"
    ,"TRAMPOLINE"
    ,"TRANQUILLE"
    ,"TRANSPARENT"
    ,"TRANSPIRER"
    ,"TRANSPORTER"
    ,"TRAVAIL"
    ,"TRAVAILLER"
    ,"TRAVERSER"
    ,"TREMPER"
    ,"TRICHER"
    ,"TRICOT"
    ,"TRIER"
    ,"TROIS"
    ,"TROISIEME"
    ,"TROMPETTE"
    ,"TROP"
    ,"TROUER"
    ,"TROUS"
    ,"TROUSSE"
    ,"TUNNEL"
    ,"UN"
    ,"UNIFORME"
    ,"USE"
    ,"VACHE"
    ,"VALISE"
    ,"VASE"
    ,"VEHICULE"
    ,"VENIR"
    ,"VENTRE"
    ,"VERRE"
    ,"VERS"
    ,"VERSER"
    ,"VERT"
    ,"VESTE"
    ,"VETEMENT"
    ,"VIDER"
    ,"VIRAGE"
    ,"VIS"
    ,"VITE"
    ,"VITESSE"
    ,"VITRE"
    ,"VOITURE"
    ,"VOIX"
    ,"VOLER"
    ,"VOULOIR"
    ,"VOYAGE"
    ,"WAGON"
    ,"XYLOPHONE"
    ,"ZERO"
    ,"ZIGZAG"];

    return tabMots;
}


function dessinerPendu(nbErreur)
{
    switch (nbErreur)
    {
        case 0:
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            break;
        case 1:
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "     ________         " + "<br>");
            break;
        case 2:
            document.write( "                      " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "     _|_______        " + "<br>");
            break;
        case 3:
            document.write( "     ________         " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "     _|_______        " + "<br>");
            break;
        case 4:
            document.write( "     ________         " + "<br>");
            document.write( "      |     |         " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "     _|_______        " + "<br>");
            break;
        case 5:
            document.write( "     ________         " + "<br>");
            document.write( "      |     |         " + "<br>");
            document.write( "      |     O         " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "     _|_______        " + "<br>");
            break;
        case 6:
            document.write( "     ________         " + "<br>");
            document.write( "      |     |         " + "<br>");
            document.write( "      |     O         " + "<br>");
            document.write( "      |     |         " + "<br>");
            document.write( "      |     |         " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "     _|_______        " + "<br>");
            break;
        case 7:
            document.write( "     ________          " + "<br>");
            document.write( "      |     |          " + "<br>");
            document.write( "      |     O          " + "<br>");
            document.write( "      |    /|\\        " + "<br>");
            document.write( "      |     |          " + "<br>");
            document.write( "      |                " + "<br>");
            document.write( "      |                " + "<br>");
            document.write( "     _|_______         " + "<br>");
            break;
        case 8:
            document.write( "     ________          " + "<br>");
            document.write( "      |     |          " + "<br>");
            document.write( "      |     O          " + "<br>");
            document.write( "      |    /|\\        " + "<br>");
            document.write( "      |     |          " + "<br>");
            document.write( "      |    / \\        " + "<br>");
            document.write( "      |                " + "<br>");
            document.write( "     _|_______         " + "<br>");
            break;
        default:
            break;
    }
}

/**
 * méthode qui cherche toutes les occurrences d'une lettre passée en paramètre
 * dans un tableau de caractères passé aussi en paramètre. Cette méthode retourne toutes les positions dans un tableau
 *
 * @param char $lettre
 * @param array $tab
 * @param int $depart  represente le point de depart de la recherche
 * @return array tableau des positions
 */
function testerLettre(lettre, tab, depart)
{
    var tabRec = tab.slice(depart); // on détermine le tableau de recherche en fonction de la position depart.
    //slice, permet d'extraire le sous tableau en fonction de la position
    // exemple slice(['B','O','N','J','O','U','R'], 5) donne ['U','R']
    var res = tabRec.indexOf(lettre); //recherche la lettre dans le tableau
    if (res == -1) // === false pour eviter la confusion entre 0 et false
    {
        return [];
    }
    else
    {
        var reponse = [];
        reponse.push(res + depart);
        var tabPos = reponse.concat(testerLettre(lettre, tab, res + depart + 1)); // concat permet de fusionner le tableau résultat avec le tableau de l'appel recursif
        // concat de [1,2] et [4] donne [1,2,4]
        return tabPos;
    }
}
/**
 * méthode qui modifie le tableau passé en paramètre en affectant la lettre à la position passée en paramètre
 *
 * @param char $lettre    lettre à placer
 * @param array $tab       tableau dans lequel mettre la lettre
 * @param int $pos       position à laquelle mettre la lettre
 * @return void             le tableau est mis à jour
 */
function ajouterUneLettre(lettre, tab, pos)
{
    tab[pos] = lettre;
    return tab;
}

/**
 *
 * methode qui permet d'echanger plusieurs valeurs dans un meme tableau et renvoi le tableau remplit
 * renvoi le tableau remplis
 * @param char val    la lettre  a ajouter
 * @param array tab    le tableau dans lequel on doit ajouter les valeurs
 * @param array tabpos le tableau avec les positions qui indique quels valeurs sont echanger dans le tableau initial
 *
 */

function ajouterLesLettres(val, tab, tabpos, niveau)
{
    switch (niveau)
    {
        case 1:
            for (i = 0; i < tabpos.length; i++) //boucle permettant de parcourir le tableau des positions
                {
                tab = ajouterUneLettre(val, tab, tabpos[i]);
            }
            return tab;
        case 2:
        case 4:
            //on place les lettres une à une de gauche à droite
            for (i = 0; i < tabpos.length; i++) //on parcours les positions
                {
                var posEtudiee = tabpos[i];
                //on verifie que la position n'est pas occupée
                if (tab[posEtudiee] != val)
                {
                    tab = ajouterUneLettre(val, tab, posEtudiee);
                    return tab;
                }
            }
            return -1; // plus de place pour la lettre
        case 3:
            // on place les lettres aléatoirement
            var test=testerLettre(val,tab,0);    //on cherche les lettres déjà placées dans le mot code
            var pos = tabpos.filter(lettre => test.indexOf(lettre) === -1);
            console.log(pos);
            if(pos.length > 0)        //s'il reste des lettres à placer
            {
                var posetudie = pos[Math.floor(Math.random()*pos.length)];
                tab = ajouterUneLettre(val, tab, posetudie);
                return tab;
            }
            else    //il n'y a plus de lettre à placer
            {
                return -1;
            }
    }
    return -1;
}


/**
 * Permet d'afficher les caractères contenus dans la liste
 * passée en paramètre
 *
 * @param array $listeLettres contenant la liste de lettres à afficher
 */
function afficherMauvaisesLettres(listeLettres)
{
    document.write("<br> Les lettres non présentes sont ");
    var taille = listeLettres.length;
    for (let i = 0; i < taille; i++)
    {
        if (i == taille - 1) // evite la , après la dernière lettre
        {
            document.write(listeLettres[i] + "<br>");
        }
        else
        {
            document.write(listeLettres[i] + ",");
        }
    }
}

// function choisirMot()
// {

//     $dico = creer_dico();
//     $nb = rand(0, count($dico) - 1);
//     return $dico[$nb]; // ou  return $dico[array_rand($dico)]
// }
function choisirMot(niv)
{
    dico = creer_dico();
    if (niv == 4) // mot <= à 4 lettres
    {
        do
        {
           var nb = Math.floor(Math.random()*dico.length - 1);
        } while (dico[nb].length > 4);
        var mot = dico[Math.floor(Math.random()*dico.length)];
    }
    else
    { //mot au hasard dans tout le dico
        var mot = dico[Math.floor(Math.random()*dico.length)];
    }
}

/**
 * méthode qui demande une lettre à l’utilisateur, elle vérifie que le caractère saisi est une lettre et le renvoi en majuscule.
 */
function demanderLettre()
{
    do
    {
        document.write("<br>")
        var lettre = prompt("entrez une lettre : ").toUpperCase();
        if (lettre.charCodeAt(0) >= 65 && lettre.charCodeAt(0) <= 90) {
            var flag = true;
        }else{
            var flag = false;
        }
    } while (flag == false || lettre.length != 0 || lettre == null); // ou utilisation de  while (!IntlChar::isalpha($lettre))
    return lettre;
}

/**
 * méthode qui renvoi 1 si la partie est gagné, -1 si la partie est perdu, 0 si la partie continue.
 * Elle reçoit en paramètre le nombre d’erreurs et le tableau contenant le mot composé
 *
 * @param int $nberreur
 * @param array $tab
 * @return void //0 si la partie est toujours en cours, 1 si c'est gagné, -1 sinon
 */
function testerGagner(nberreur, tab)
{
    if (nberreur == 9) // si nb erreur =9, partie perdue
    {
        return -1;
    }
    else if (tab.includes("_") === false) // s'il y a un _ dans le tableau, la partie est en cours
    {
        return 1;
    }
    else
    {
        return 0;
    }

}

/**
 * Demande le niveau à l'utilisateur
 *
 * @return int le niveau de difficulté
 */
function choisirNiveau()
{
    do
    {
        document.write("Niveau de difficulé : <br>");
        document.write("Facile (1)   Normal (2)   Difficile (3)   Court(4)");
        niveau = prompt(" : ");

        if (niveau > 4 || niveau < 1)
        {
            document.write("<br>Saisie invalide ! Recommencer (rappel : 1 ou 2 ou 3 ou 4) <br>");
        }
    } while (niveau > 4 || niveau < 1);
    switch (niveau)
    {
        case "1":
            document.write("<br> Niveau Facile ! C'est parti ! <br> ");
            break;
        case "2":
            document.write("<br> Niveau Normal ! C'est parti ! <br> ");
            break;
        case "3":
            document.write("<br> Niveau Difficile ! C'est parti ! <br> ");
            break;
        case "4":
            document.write("<br> Niveau Court ! C'est parti ! <br> ");
            break;
    }
    return niveau;
}

/**
 * Permet de gérer la partie
 *
 * @return void
 */
function lancerPartie(niveau)
{
    var motATrouver = choisirMot(niveau); // determine la mot à trouver
    document.write( motATrouver + "<br>");
    var tabMotATrouver = motATrouver.split(); // toutes les functions travaillent avec des tableaux, on transforme la haine en tableau
    var motCode = coderMot(motATrouver, niveau);
    var nbErreur = 0; // compte le nombre d'erreur
    var gagne = false;
    var mauvaisesLettres = []; // tableau contenant les mauvaises lettres
    do
    {
        document.write("<br><br>") ;
        afficherTableau(motCode); // on affiche le mot contenant les _
        dessinerPendu(nbErreur);
        if (!empty(mauvaisesLettres))
        { //s'il y a des mauvaises lettres, on les affiche
            afficherMauvaisesLettres(mauvaisesLettres);
        }
        var lettre = demanderLettre();
        var lesPositions = testerLettre(lettre, tabMotATrouver, 0); //on recupere toutes les positions de cette lettre dans le mot
        if (empty(lesPositions))
        { //la lettre n'est pas dans le mot
            nbErreur++;
            mauvaisesLettres.push([lettre]);
        }
        else
        {
            var reponse = ajouterLesLettres(lettre, motCode, lesPositions, niveau); //motCode = pour récuperer le tableau mis à jour
            if (reponse == -1) // la lettre ne peut plus etre placée
            {
                nbErreur++;
                mauvaisesLettres.push([lettre]);
            }
            else
            {
                var motCode = reponse;
            }
        }

        var gagne = testerGagner(nbErreur, motCode); // on teste l'état de la partie
    } while ($gagne == 0);
    if (gagne == 1)
    {
        document.write("Bravo!! vous avez gagné. Le mot été" + motATrouver + "<br>");
    }
    else
    {
        document.write( "Vous avez perdu. Le mot été" + motATrouver + "<br>");
    }
}

niv = choisirNiveau();
lancerPartie(niv);
