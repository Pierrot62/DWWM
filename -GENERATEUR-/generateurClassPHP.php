<?php
/************************Fonction ******************************************/
function demandeEntier($message){ // Demande un entier à l'utilisateur
    do
    {
        do
        {
            $nombre = readline($message);
        } while (!is_numeric($nombre)); // on verifie que la chaine de caracterer ne contient que des chiffres
    } while (!is_int($nombre * 1)); // on vérifie que le nombre est entier (pas réel)
    return $nombre; //renvoi le nombre saisi
}

function affichageAttributsPrive(Array $attributs){
    $att="";
    foreach($attributs as $elt){
        $att.="\n\t".'private $_'.$elt." ;";
    }
    return $att;
}

function affichageAttributsStatic(Array $attributs){
    $att="";
    foreach($attributs as $elt){
        $att.="\n\t".'private static $_'.$elt." ;";
    }
    return $att;
}

function creationSettersGettersPrive(Array $attributs){
    $getSet="";
    foreach($attributs as $elt){
        $getSet.="\n\tpublic function get".ucfirst($elt).'()'
                    ."\n\t{"
                    ."\n\t\t".'return $this->_'.$elt.';'
                    ."\n\t}"
                    ."\n\n\tpublic function set".ucfirst($elt).'($'.$elt.')'
                    ."\n\t{"
                    ."\n\t\t".'$this->_'.$elt.' = $'.$elt.';'
                    ."\n\t}";
    }
    return $getSet;
}

function creationSettersGettersStatic(Array $attributs){
    $getSet="";
    foreach($attributs as $elt){
        $getSet.="\n\tpublic function get".ucfirst($elt).'()'
                    ."\n\t{"
                    ."\n\t\t".'return self::$_'.$elt.';'
                    ."\n\t}"
                    ."\n\n\tpublic function set".ucfirst($elt).'($'.$elt.')'
                    ."\n\t{"
                    ."\n\t\t".'self::$_'.$elt.' = $'.$elt.';'
                    ."\n\t}";
    }
    return $getSet;
}

function creationToString(Array $attributs){
    $toString='';
    foreach($attributs as $elt){
        $toString.='" '.$elt.' : ".$this->get'.ucfirst($elt).'()'."\t.";
    }
    $toString=substr($toString,0,strlen($toString)-1); //pour retirer le dernier point
    return $toString;
}

/************************Fin fonction ******************************************/

//Saisie utilisateur

//nom de la classe
$nomClasse=readline("Donnez le nom de la classe : ");
$nomClasse[0]=strtoupper($nomClasse[0]);

//Heritage
$heritage=false;
$choix=strtoupper(readline("La classe est elle une fille ? (O/N) : "));
while($choix!="O" && $choix!="N"){
    echo "Erreur de saisie\n";
    $choix=strtoupper(readline("La classe est elle une fille ? (O/N) : "));
}
if($choix=="O"){
    $heritage=true;
    //Nom de la classe mère
    $nomClasseMere=ucfirst(readline("Donnez le nom de la classe mère : "));
    $nomClasseMere[0]=strtoupper($nomClasseMere[0]);
}

//Attributs privé
$nbAttributsPrive=demandeEntier("Donnez le nombre d'attributs privé de la classe : ");
$attributsPrive=[];
for($i=0;$i<$nbAttributsPrive;$i++){
    $attribut=readline("Donnez le nom de l'attribut : ");
    while(!ctype_alpha($attribut) || in_array($attribut,$attributsPrive)){
        echo "Erreur de saisie\n";
        $attribut=readline("Donnez le nom de l'attribut : ");
    }

    $attributsPrive[]=$attribut;
}

//Attributs static
$nbAttributsStatic=demandeEntier("Donnez le nombre d'attributs static de la classe : ");
$attributsStatic=[];
for($i=0;$i<$nbAttributsStatic;$i++){
    $attribut=readline("Donnez le nom de l'attribut : ");
    while(!ctype_alpha($attribut) || in_array($attribut,$attributsStatic) || in_array($attribut,$attributsPrive)){
        echo "Erreur de saisie\n";
        $attribut=readline("Donnez le nom de l'attribut : ");
    }

    $attributsStatic[]=$attribut;
}

//Création du fichier
$fp = fopen('./'.$nomClasse.'.Class.php', "w");

//Haut de page
if($heritage){
    $hautDePage='<?php'."\n\n".
                'Class '.$nomClasse.' extends '.$nomClasseMere.' {';
}else{
    $hautDePage='<?php'."\n\n".
                'Class '.$nomClasse.' {';
}

fputs($fp,$hautDePage);

//Attributs
$pageAttributs="\n\t".'/***************************************** Attributs **********************************************/'.
                "\n".affichageAttributsPrive($attributsPrive)
                ."\n".affichageAttributsStatic($attributsStatic)."\n";

fputs($fp,$pageAttributs);

//Getter Setters
$pageSettersGetters="\n\t".'/***************************************** Accesseurs **********************************************/'.
                    "\n\t".creationSettersGettersPrive($attributsPrive)
                    ."\n\t".creationSettersGettersStatic($attributsStatic)
                    ."\n";

fputs($fp,$pageSettersGetters);

//Constructeur
$pageConstructeur=   "\n\t".'/***************************************** Constructeur **********************************************/'
                    ."\n\n\t".'public function __construct(array $options = [])'
                    ."\n\t{";
if($heritage){
$pageConstructeur.="\n\t\t".'parent::__construct($options);';    
}                   
$pageConstructeur.= "\n\t\t".'if (!empty($options)) // empty : renvoi vrai si le tableau est vide'
                    ."\n\t\t{"
                    ."\n\t\t\t".'$this->hydrate($options);'
                    ."\n\t\t}"
                    ."\n\t}"
                    ."\n\t".'public function hydrate($data)'
                    ."\n\t{"
                    ."\n\t\t".'foreach ($data as $key => $value)'
                    ."\n\t\t{"
                    ."\n\t\t\t".'$methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule'
                    ."\n\t\t\t".'if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe'
                    ."\n\t\t\t{"
                    ."\n\t\t\t\t".'$this->$methode($value);'
                    ."\n\t\t\t}"
                    ."\n\t\t}"
                    ."\n\t}"
                    ."\n";   

fputs($fp,$pageConstructeur);

//Methodes
//toString
$attributs=array_merge($attributsPrive,$attributsStatic);
$pageToString="\n\t".'/***************************************** Methode **********************************************/'
                ."\n\n\t".'/**'
                ."\n\t".'* Transforme l\'objet en chaine de caractères'
                ."\n\t".'*'
                ."\n\t".'* @return String'
                ."\n\t".'*/'
                ."\n\t".'public function toString(){'
                ."\n\t\t".'return '.creationToString($attributs).';'
                ."\n\t}"
                ."\n";


fputs($fp,$pageToString);

//equalsTo
$pageEqualsTo=   "\n\t".'/**'
                ."\n\t".'* Renvoi vrai si l\'objet en paramètre est égal à l\'objet appelant'
                ."\n\t".'*'
                ."\n\t".'* @param [type] obj'
                ."\n\t".'* @return bool'
                ."\n\t".'*/'
                ."\n\t".'public function equalsTo(){'
                ."\n\t\t".'return  "";'
                ."\n\t".'}'
                ."\n";

fputs($fp,$pageEqualsTo);

//compareTo
$pageCompareTo=  "\n\t".'/**'
                ."\n\t".'* Compare 2 objets'
                ."\n\t".'* Renvoi 1 si le 1er est >'
                ."\n\t".'*        0 si ils sont égaux'
                ."\n\t".'*        -1 si le 1er est <'
                ."\n\t".'*'
                ."\n\t".'* @param [type] obj1'
                ."\n\t".'* @param [type] obj2'
                ."\n\t".'* @return void'
                ."\n\t".'*/'
                ."\n\t".'public function compareTo(){'
                ."\n\t\t".'return "";'
                ."\n\t".'}'
                ."\n";
fputs($fp,$pageCompareTo);

//fin de classe
fputs($fp,"\n".'}');