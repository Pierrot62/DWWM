<?php

Class Clients {
	/***************************************** Attributs **********************************************/

	private $_idClient ;
	private $_nomClient ;
	private $_prenomClient ;
	private $_fidelite ;
	private $_cagnotte ;
	private $_ageClient ;


	/***************************************** Accesseurs **********************************************/
	
	public function getIdClient()
	{
		return $this->_idClient;
	}

	public function setIdClient($idClient)
	{
		$this->_idClient = $idClient;
	}
	public function getNomClient()
	{
		return $this->_nomClient;
	}

	public function setNomClient($nomClient)
	{
		$this->_nomClient = $nomClient;
	}
	public function getPrenomClient()
	{
		return $this->_prenomClient;
	}

	public function setPrenomClient($prenomClient)
	{
		$this->_prenomClient = $prenomClient;
	}
	public function getFidelite()
	{
		return $this->_fidelite;
	}

	public function setFidelite($fidelite)
	{
		$this->_fidelite = $fidelite;
	}
	public function getCagnotte()
	{
		return $this->_cagnotte;
	}

	public function setCagnotte($cagnotte)
	{
		$this->_cagnotte = $cagnotte;
	}
	public function getAgeClient()
	{
		return $this->_ageClient;
	}

	public function setAgeClient($ageClient)
	{
		$this->_ageClient = $ageClient;
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
		foreach ($data as $key => $value)
		{
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
	public function toString(){
		return " idClient : ".$this->getIdClient()	." nomClient : ".$this->getNomClient()	." prenomClient : ".$this->getPrenomClient()	." fidelite : ".$this->getFidelite()	." cagnotte : ".$this->getCagnotte()	." ageClient : ".$this->getAgeClient()	;
	}

	/**
	* Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
	*
	* @param [type] obj
	* @return bool
	*/
	public function equalsTo(){
		return  "";
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
	public function compareTo(){
		return "";
	}

}