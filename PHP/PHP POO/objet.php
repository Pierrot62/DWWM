<?php 

Class Personne
{

    //Attributs
    private $_nom;
    private $_prenom;
    private $_age;
    private $_genre;

    public function __construct()
    {

    }


    //GETTER
    public function getNom()
    {
        return $this->_nom;
    
    }

    public function getPrenom()
    {
        return $this->_prenom;
    
    }

    public function getAge()
    {
        return $this->_age;
    
    }

    public function getGenre()
    {
        return $this->_genre;
    
    }


    //SETTER
    public function setNom($n)
    {
        $this->_nom= $n;
    }
    public function setPrenom($p)
    {
        $this->_prenom= $p;
    }
    public function setAge($a)
    {
        $this->_age= $p;
    }
    public function setGenre($g)
    {
        $this->_genre= $p;
    }
}

$p1 = new Personne();
$p1->setNom('TOTO');
$p1->setPrenom('TATA');
$p1->setAge('17');
$p1->setGenre('Femme');
echo $p1->getNom()."\n".$p1->getPrenom()."\n".$p1->getAge()."\n".$p1->getGenre();
