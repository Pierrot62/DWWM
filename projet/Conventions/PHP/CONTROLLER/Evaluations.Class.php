<?php

class Evaluations 
{

	/*****************Attributs***************** */

	private $_idStage;
	private $_dateEvaluation;
	private $_objectifAcquisition;
	private $_comportementMt;
	private $_satisfactionEnt;
	private $_remarqueEnt;
	private $_perspectiveEmb;

	/***************** Accesseurs ***************** */


	public function getIdStage()
	{
		return $this->_idStage;
	}

	public function setIdStage($idStage)
	{
		$this->_idStage=$idStage;
	}

	public function getDateEvaluation()
	{
		return $this->_dateEvaluation;
	}

	public function setDateEvaluation($dateEvaluation)
	{
		$this->_dateEvaluation=$dateEvaluation;
	}

	public function getObjectifAcquisition()
	{
		return $this->_objectifAcquisition;
	}

	public function setObjectifAcquisition($objectifAcquisition)
	{
		$this->_objectifAcquisition=$objectifAcquisition;
	}

	public function getComportementMt()
	{
		return $this->_comportementMt;
	}

	public function setComportementMt($comportementMt)
	{
		$this->_comportementMt=$comportementMt;
	}

	public function getSatisfactionEnt()
	{
		return $this->_satisfactionEnt;
	}

	public function setSatisfactionEnt($satisfactionEnt)
	{
		$this->_satisfactionEnt=$satisfactionEnt;
	}

	public function getRemarqueEnt()
	{
		return $this->_remarqueEnt;
	}

	public function setRemarqueEnt($remarqueEnt)
	{
		$this->_remarqueEnt=$remarqueEnt;
	}

	public function getPerspectiveEmb()
	{
		return $this->_perspectiveEmb;
	}

	public function setPerspectiveEmb($perspectiveEmb)
	{
		$this->_perspectiveEmb=$perspectiveEmb;
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
		return "IdStage : ".$this->getIdStage()."DateEvaluation : ".$this->getDateEvaluation()."ObjectifAcquisition : ".$this->getObjectifAcquisition()."ComportementMt : ".$this->getComportementMt()."SatisfactionEnt : ".$this->getSatisfactionEnt()."RemarqueEnt : ".$this->getRemarqueEnt()."PerspectiveEmb : ".$this->getPerspectiveEmb()."\n";
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