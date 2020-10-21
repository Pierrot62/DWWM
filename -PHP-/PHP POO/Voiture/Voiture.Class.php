<?php

class Voiture
{

    //Attributs
    private $_marque;
    private $_modele;
    private $_couleur;
    private $_puissance;

    public function __construct($ma, $mo, $cou, $pui)
    {

        $this->setMarque($ma);
        $this->setModele($mo);
        $this->setCouleur($cou);
        $this->setPuissance($pui);

    }

    //ASSESEURS

    //GETTER

    public function getMarque()
    {
        return $this->_marque;
    }
    public function getModele()
    {
        return $this->_modele;
    }
    public function getCouleur()
    {
        return $this->_couleur;
    }
    public function getPuissance()
    {
        return $this->_puissance;
    }

    // SETTER
    public function setMarque($m)
    {
        $this->_marque = ctype_alpha($m) ? $m : null;
    }
    public function setModele($m)
    {
        $this->_modele = $m;
    }
    public function setCouleur($c)
    {
        $this->_couleur = ctype_alpha($c) ? $c : null;
    }
    public function setPuissance($p)
    {
        $this->_puissance = is_int($p) ? $p : null;
    }

    //AUTRE METHODE

    function toString()
    {
        $reponse = "Ma voiture est une $this->_marque modele $this->_modele de couleur $this->_couleur est elle developpe $this->_puissance chevaux ! ";

        return $reponse;
    }

    function equalTo($obj){
        
        if($this->_marque==$obj->getMarque() && $this->_marque==$obj->getMarque()){
            return true;
        }
        return false;
    }
}

$v1 = new Voiture("Audi","RS6","GRISE", 450);

var_dump($v1);
echo $v1->toString();