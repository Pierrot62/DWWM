<?php

class StagiaireFormation 
{

	/*****************Attributs***************** */

	private $_idFormation;
	private $_libelleFormation;
	private $_idSessionFormation;
	private $_numOffreFormation;
	private $_idPeriode;
	private $_dateDebutPAE;
	private $_dateFinPAE;
	private $_dateRapportSuivi;
	private $_objectifPAE;
	private $_idParticipation;
	private $_dateDebut;
	private $_dateFin;
	private $_idStagiaire;
	private $_genreStagiaire;
	private $_nomStagiaire;
	private $_prenomStagiaire;
	private $_numSecuStagiaire;
	private $_numBenefStagiaire;
	private $_dateNaissanceStagiaire;
	private $_emailStagiaire;

	/***************** Accesseurs ***************** */


	public function getIdFormation()
	{
		return $this->_idFormation;
	}

	public function setIdFormation($idFormation)
	{
		$this->_idFormation=$idFormation;
	}

	public function getLibelleFormation()
	{
		return $this->_libelleFormation;
	}

	public function setLibelleFormation($libelleFormation)
	{
		$this->_libelleFormation=$libelleFormation;
	}

	public function getIdSessionFormation()
	{
		return $this->_idSessionFormation;
	}

	public function setIdSessionFormation($idSessionFormation)
	{
		$this->_idSessionFormation=$idSessionFormation;
	}

	public function getNumOffreFormation()
	{
		return $this->_numOffreFormation;
	}

	public function setNumOffreFormation($numOffreFormation)
	{
		$this->_numOffreFormation=$numOffreFormation;
	}

	public function getIdPeriode()
	{
		return $this->_idPeriode;
	}

	public function setIdPeriode($idPeriode)
	{
		$this->_idPeriode=$idPeriode;
	}

	public function getDateDebutPAE()
	{
		return $this->_dateDebutPAE;
	}

	public function setDateDebutPAE($dateDebutPAE)
	{
		$this->_dateDebutPAE=$dateDebutPAE;
	}

	public function getDateFinPAE()
	{
		return $this->_dateFinPAE;
	}

	public function setDateFinPAE($dateFinPAE)
	{
		$this->_dateFinPAE=$dateFinPAE;
	}

	public function getDateRapportSuivi()
	{
		return $this->_dateRapportSuivi;
	}

	public function setDateRapportSuivi($dateRapportSuivi)
	{
		$this->_dateRapportSuivi=$dateRapportSuivi;
	}

	public function getObjectifPAE()
	{
		return $this->_objectifPAE;
	}

	public function setObjectifPAE($objectifPAE)
	{
		$this->_objectifPAE=$objectifPAE;
	}

	public function getIdParticipation()
	{
		return $this->_idParticipation;
	}

	public function setIdParticipation($idParticipation)
	{
		$this->_idParticipation=$idParticipation;
	}

	public function getDateDebut()
	{
		return $this->_dateDebut;
	}

	public function setDateDebut($dateDebut)
	{
		$this->_dateDebut=$dateDebut;
	}

	public function getDateFin()
	{
		return $this->_dateFin;
	}

	public function setDateFin($dateFin)
	{
		$this->_dateFin=$dateFin;
	}

	public function getIdStagiaire()
	{
		return $this->_idStagiaire;
	}

	public function setIdStagiaire($idStagiaire)
	{
		$this->_idStagiaire=$idStagiaire;
	}

	public function getGenreStagiaire()
	{
		return $this->_genreStagiaire;
	}

	public function setGenreStagiaire($genreStagiaire)
	{
		$this->_genreStagiaire=$genreStagiaire;
	}

	public function getNomStagiaire()
	{
		return $this->_nomStagiaire;
	}

	public function setNomStagiaire($nomStagiaire)
	{
		$this->_nomStagiaire=$nomStagiaire;
	}

	public function getPrenomStagiaire()
	{
		return $this->_prenomStagiaire;
	}

	public function setPrenomStagiaire($prenomStagiaire)
	{
		$this->_prenomStagiaire=$prenomStagiaire;
	}

	public function getNumSecuStagiaire()
	{
		return $this->_numSecuStagiaire;
	}

	public function setNumSecuStagiaire($numSecuStagiaire)
	{
		$this->_numSecuStagiaire=$numSecuStagiaire;
	}

	public function getNumBenefStagiaire()
	{
		return $this->_numBenefStagiaire;
	}

	public function setNumBenefStagiaire($numBenefStagiaire)
	{
		$this->_numBenefStagiaire=$numBenefStagiaire;
	}

	public function getDateNaissanceStagiaire()
	{
		return $this->_dateNaissanceStagiaire;
	}

	public function setDateNaissanceStagiaire($dateNaissanceStagiaire)
	{
		$this->_dateNaissanceStagiaire=$dateNaissanceStagiaire;
	}

	public function getEmailStagiaire()
	{
		return $this->_emailStagiaire;
	}

	public function setEmailStagiaire($emailStagiaire)
	{
		$this->_emailStagiaire=$emailStagiaire;
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
		return "IdFormation : ".$this->getIdFormation()."LibelleFormation : ".$this->getLibelleFormation()."IdSessionFormation : ".$this->getIdSessionFormation()."NumOffreFormation : ".$this->getNumOffreFormation()."IdPeriode : ".$this->getIdPeriode()."DateDebutPAE : ".$this->getDateDebutPAE()."DateFinPAE : ".$this->getDateFinPAE()."DateRapportSuivi : ".$this->getDateRapportSuivi()."ObjectifPAE : ".$this->getObjectifPAE()."IdParticipation : ".$this->getIdParticipation()."DateDebut : ".$this->getDateDebut()."DateFin : ".$this->getDateFin()."IdStagiaire : ".$this->getIdStagiaire()."GenreStagiaire : ".$this->getGenreStagiaire()."NomStagiaire : ".$this->getNomStagiaire()."PrenomStagiaire : ".$this->getPrenomStagiaire()."NumSecuStagiaire : ".$this->getNumSecuStagiaire()."NumBenefStagiaire : ".$this->getNumBenefStagiaire()."DateNaissanceStagiaire : ".$this->getDateNaissanceStagiaire()."EmailStagiaire : ".$this->getEmailStagiaire()."\n";
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