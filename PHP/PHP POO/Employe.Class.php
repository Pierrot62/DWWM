<?php
class Employe
{

    /*****************Attributs***************** */
    private $_nom;
    private $_prenom;
    private $_dateEmbauche;
    private $_fonction;
    private $_salaireAnnuel;
    private $_service;

    /*****************Accesseurs***************** */

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }
    public function getDateEmbauche()
    {
        return $this->_dateEmbauche;
    }

    public function setDateEmbauche(DateTime $dateEmbauche)
    {
        $this->_dateEmbauche = $dateEmbauche;
    }

    public function getSalaireAnnuel()
    {
        return $this->_salaireAnnuel;
    }

    public function setSalaireAnnuel($salaireAnnuel)
    {
        $this->_salaireAnnuel = $salaireAnnuel;
    }

    public function getFonction()
    {
        return $this->_fonction;
    }

    public function setFonction($fonction)
    {
        $this->_fonction = $fonction;
    }

    public function getService()
    {
        return $this->_service;
    }

    public function setService($service)
    {
        $this->_service = $service;
    }

    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value)
        {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    /*****************Autres Méthodes***************** */

    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        // return "L'employer s'appelle : " .$this->getNom() ." ". $this->getPrenom().;
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] obj
     * @return bool
     */
    public function equalsTo($obj)
    {
        return true;
    }
    /**
     * Compare 2 objets
     * Renvoi 1 si le 1er est >
     *        0 si ils sont égaux
     *        -1 si le 1er est <
     *
     * @param [type] $obj1
     * @param [type] $obj2
     * @return void
     */
    public static function compareTo($obj1, $obj2)
    {
        return 0;
    }
    /**
     * Renvoi l'anciennete de l'employe
     *
     * @return int  le nombre d'annee d'ancienneté
     */
    public function anciennete()
    {
        $auj = new DateTime('now');
        $interval = $auj->diff($this->getDateEmbauche(), true); //diff renvoi une DateIntervalle, true oblige cet interval a être positif
        $annee = $interval->format('%y') * 1; // on *1 pour avoir un int
        return $annee;
    }

    /**
     * methode pour pour calculer la prime salaire
     *
     * @return  double  le montant de la prime salaire
     */
    private function primeSalaire()
    {
        return $this->getSalaireAnnuel() * 1000 * 0.05; // on retourne le montant de la prime annuelle
    }

    /**
     * methode pour pour calculer la prime d'ancienneté
     *
     * @return   double le montant de la prime d'ancienneté
     */
    private function primeAnciennete()
    {
        return $this->getSalaireAnnuel() * 1000 * 0.02 * $this->anciennete(); // on retourne le montant de la prime annuelle
    }

    /**
     * methode pour pour calculer la prime annuelle
     *
     * @return  double  le montant de la prime annuelle
     *
     *
     */
    public function prime()
    {
        return $this->primeSalaire() + $this->primeAnciennete(); // on retourne le montant de la prime annuelle
    }

}
