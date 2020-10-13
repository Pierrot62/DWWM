<?php

class Document
{
    /***************************************** Attributs **********************************************/

    private $_Titre;
    private $_Type;
    private $_Auteur;
    private $_estEmprunte = false;

    /***************************************** Accesseurs **********************************************/

    public function getTitre()
    {
        return $this->_Titre;
    }

    public function setTitre($Titre)
    {
        return $this->_Titre = $Titre;
    }
    public function getType()
    {
        return $this->_Type;
    }

    public function setType($Type)
    {
        return $this->_Type = $Type;
    }

    public function getAuteur()
    {
        return $this->_Auteur;
    }

    public function setAuteur($Auteur)
    {
        $this->_Auteur = $Auteur;
    }

    public function getEstEmprunte()
    {
        return $this->_estEmprunte;
    }

    public function setEstEmprunte($estEmprunte)
    {
        $this->_estEmprunte = $estEmprunte;
    }
    /***************************************** Constructeur **********************************************/

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    /***************************************** Methode **********************************************/

    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        return  "Titre : " . $this->getTitre() . "Type : " . $this->getType() . "Actuellement emprunté : ". $this->getEstEmprunte(). "\n\n*** AUTEUR ***\n\n" . $this->getAuteur()->toString();
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] obj
     * @return bool
     */
    public function equalsTo($obj)
    {
		if($this->_Titre==$obj->getTitre() && $this->_Auteur==$obj->getAuteur()){
            return true;
        }
        return false;
    }
    
    /**
     * Compare 2 objets
     * Renvoi 1 si le 1er est >
     *        0 si ils sont égaux
     *        -1 si le 1er est <
     *
     * @param [type] obj1
     * @param [type] obj2
     * @return void
     */
    public function compareTo()
    {
        return "";
    }

    // public function getTitre(){

    // return ;
    // }

    function estEmprunte()
    {
		if($this->getEstEmprunte() == "OUI"){

			return true;
		}
		else {
			return false;
		}
        
    }
	public function Titre($obj){
	
	
	return $obj->getTitre();
	}
	public function Auteur($obj){
	
	
		return $obj->getAuteur();
		}

}
