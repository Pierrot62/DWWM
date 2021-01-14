<?php

class Horaires 
{

	/*****************Attributs***************** */

	private $_idStage;
	private $_dateDebutStage;
	private $_dateFinStage;
	private $_horaireDebutJour1;
	private $_horaireDebutJour2;
	private $_horaireDebutJour3;
	private $_horaireDebutJour4;
	private $_horaireDebutJour5;
	private $_horaireDebutJour6;
	private $_horaireFinJour1;
	private $_horaireFinJour2;
	private $_horaireFinJour3;
	private $_horaireFinJour4;
	private $_horaireFinJour5;
	private $_horaireFinJour6;
	private $_horaireDebutDej1;
	private $_horaireDebutDej2;
	private $_horaireDebutDej3;
	private $_horaireDebutDej4;
	private $_horaireDebutDej5;
	private $_horaireDebutDej6;
	private $_horaireFinDej1;
	private $_horaireFinDej2;
	private $_horaireFinDej3;
	private $_horaireFinDej4;
	private $_horaireFinDej5;
	private $_horaireFinDej6;

	/***************** Accesseurs ***************** */


	public function getIdStage()
	{
		return $this->_idStage;
	}

	public function setIdStage($idStage)
	{
		$this->_idStage=$idStage;
	}

	public function getDateDebutStage()
	{
		return $this->_dateDebutStage;
	}

	public function setDateDebutStage($dateDebutStage)
	{
		$this->_dateDebutStage=$dateDebutStage;
	}

	public function getDateFinStage()
	{
		return $this->_dateFinStage;
	}

	public function setDateFinStage($dateFinStage)
	{
		$this->_dateFinStage=$dateFinStage;
	}

	public function getHoraireDebutJour1()
	{
		return $this->_horaireDebutJour1;
	}

	public function setHoraireDebutJour1($horaireDebutJour1)
	{
		$this->_horaireDebutJour1=$horaireDebutJour1;
	}

	public function getHoraireDebutJour2()
	{
		return $this->_horaireDebutJour2;
	}

	public function setHoraireDebutJour2($horaireDebutJour2)
	{
		$this->_horaireDebutJour2=$horaireDebutJour2;
	}

	public function getHoraireDebutJour3()
	{
		return $this->_horaireDebutJour3;
	}

	public function setHoraireDebutJour3($horaireDebutJour3)
	{
		$this->_horaireDebutJour3=$horaireDebutJour3;
	}

	public function getHoraireDebutJour4()
	{
		return $this->_horaireDebutJour4;
	}

	public function setHoraireDebutJour4($horaireDebutJour4)
	{
		$this->_horaireDebutJour4=$horaireDebutJour4;
	}

	public function getHoraireDebutJour5()
	{
		return $this->_horaireDebutJour5;
	}

	public function setHoraireDebutJour5($horaireDebutJour5)
	{
		$this->_horaireDebutJour5=$horaireDebutJour5;
	}

	public function getHoraireDebutJour6()
	{
		return $this->_horaireDebutJour6;
	}

	public function setHoraireDebutJour6($horaireDebutJour6)
	{
		$this->_horaireDebutJour6=$horaireDebutJour6;
	}

	public function getHoraireFinJour1()
	{
		return $this->_horaireFinJour1;
	}

	public function setHoraireFinJour1($horaireFinJour1)
	{
		$this->_horaireFinJour1=$horaireFinJour1;
	}

	public function getHoraireFinJour2()
	{
		return $this->_horaireFinJour2;
	}

	public function setHoraireFinJour2($horaireFinJour2)
	{
		$this->_horaireFinJour2=$horaireFinJour2;
	}

	public function getHoraireFinJour3()
	{
		return $this->_horaireFinJour3;
	}

	public function setHoraireFinJour3($horaireFinJour3)
	{
		$this->_horaireFinJour3=$horaireFinJour3;
	}

	public function getHoraireFinJour4()
	{
		return $this->_horaireFinJour4;
	}

	public function setHoraireFinJour4($horaireFinJour4)
	{
		$this->_horaireFinJour4=$horaireFinJour4;
	}

	public function getHoraireFinJour5()
	{
		return $this->_horaireFinJour5;
	}

	public function setHoraireFinJour5($horaireFinJour5)
	{
		$this->_horaireFinJour5=$horaireFinJour5;
	}

	public function getHoraireFinJour6()
	{
		return $this->_horaireFinJour6;
	}

	public function setHoraireFinJour6($horaireFinJour6)
	{
		$this->_horaireFinJour6=$horaireFinJour6;
	}

	public function getHoraireDebutDej1()
	{
		return $this->_horaireDebutDej1;
	}

	public function setHoraireDebutDej1($horaireDebutDej1)
	{
		$this->_horaireDebutDej1=$horaireDebutDej1;
	}

	public function getHoraireDebutDej2()
	{
		return $this->_horaireDebutDej2;
	}

	public function setHoraireDebutDej2($horaireDebutDej2)
	{
		$this->_horaireDebutDej2=$horaireDebutDej2;
	}

	public function getHoraireDebutDej3()
	{
		return $this->_horaireDebutDej3;
	}

	public function setHoraireDebutDej3($horaireDebutDej3)
	{
		$this->_horaireDebutDej3=$horaireDebutDej3;
	}

	public function getHoraireDebutDej4()
	{
		return $this->_horaireDebutDej4;
	}

	public function setHoraireDebutDej4($horaireDebutDej4)
	{
		$this->_horaireDebutDej4=$horaireDebutDej4;
	}

	public function getHoraireDebutDej5()
	{
		return $this->_horaireDebutDej5;
	}

	public function setHoraireDebutDej5($horaireDebutDej5)
	{
		$this->_horaireDebutDej5=$horaireDebutDej5;
	}

	public function getHoraireDebutDej6()
	{
		return $this->_horaireDebutDej6;
	}

	public function setHoraireDebutDej6($horaireDebutDej6)
	{
		$this->_horaireDebutDej6=$horaireDebutDej6;
	}

	public function getHoraireFinDej1()
	{
		return $this->_horaireFinDej1;
	}

	public function setHoraireFinDej1($horaireFinDej1)
	{
		$this->_horaireFinDej1=$horaireFinDej1;
	}

	public function getHoraireFinDej2()
	{
		return $this->_horaireFinDej2;
	}

	public function setHoraireFinDej2($horaireFinDej2)
	{
		$this->_horaireFinDej2=$horaireFinDej2;
	}

	public function getHoraireFinDej3()
	{
		return $this->_horaireFinDej3;
	}

	public function setHoraireFinDej3($horaireFinDej3)
	{
		$this->_horaireFinDej3=$horaireFinDej3;
	}

	public function getHoraireFinDej4()
	{
		return $this->_horaireFinDej4;
	}

	public function setHoraireFinDej4($horaireFinDej4)
	{
		$this->_horaireFinDej4=$horaireFinDej4;
	}

	public function getHoraireFinDej5()
	{
		return $this->_horaireFinDej5;
	}

	public function setHoraireFinDej5($horaireFinDej5)
	{
		$this->_horaireFinDej5=$horaireFinDej5;
	}

	public function getHoraireFinDej6()
	{
		return $this->_horaireFinDej6;
	}

	public function setHoraireFinDej6($horaireFinDej6)
	{
		$this->_horaireFinDej6=$horaireFinDej6;
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
 			$methode = "set".ucfirst($key); //ucfirst met la 1ere lettre en majuscule
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
		return "IdStage : ".$this->getIdStage()."DateDebutStage : ".$this->getDateDebutStage()."DateFinStage : ".$this->getDateFinStage()."HoraireDebutJour1 : ".$this->getHoraireDebutJour1()."HoraireDebutJour2 : ".$this->getHoraireDebutJour2()."HoraireDebutJour3 : ".$this->getHoraireDebutJour3()."HoraireDebutJour4 : ".$this->getHoraireDebutJour4()."HoraireDebutJour5 : ".$this->getHoraireDebutJour5()."HoraireDebutJour6 : ".$this->getHoraireDebutJour6()."HoraireFinJour1 : ".$this->getHoraireFinJour1()."HoraireFinJour2 : ".$this->getHoraireFinJour2()."HoraireFinJour3 : ".$this->getHoraireFinJour3()."HoraireFinJour4 : ".$this->getHoraireFinJour4()."HoraireFinJour5 : ".$this->getHoraireFinJour5()."HoraireFinJour6 : ".$this->getHoraireFinJour6()."HoraireDebutDej1 : ".$this->getHoraireDebutDej1()."HoraireDebutDej2 : ".$this->getHoraireDebutDej2()."HoraireDebutDej3 : ".$this->getHoraireDebutDej3()."HoraireDebutDej4 : ".$this->getHoraireDebutDej4()."HoraireDebutDej5 : ".$this->getHoraireDebutDej5()."HoraireDebutDej6 : ".$this->getHoraireDebutDej6()."HoraireFinDej1 : ".$this->getHoraireFinDej1()."HoraireFinDej2 : ".$this->getHoraireFinDej2()."HoraireFinDej3 : ".$this->getHoraireFinDej3()."HoraireFinDej4 : ".$this->getHoraireFinDej4()."HoraireFinDej5 : ".$this->getHoraireFinDej5()."HoraireFinDej6 : ".$this->getHoraireFinDej6()."\n";
	}


	
	/* Renvoit Vrai si lobjet en paramètre est égal 
	* à l'objet appelant
	*
	* @param [type] $obj
	* @return bool
	*/
	public function equalsTo($obj)
	{
		return;
	}


	/**
	* Compare l'objet à un autre
	* Renvoi 1 si le 1er est >
	*        0 si ils sont égaux
	*      - 1 si le 1er est <
	*
	* @param [type] $obj1
	* @param [type] $obj2
	* @return Integer
	*/
	public function compareTo($obj)
	{
		return;
	}
}