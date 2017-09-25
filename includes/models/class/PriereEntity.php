<?php

class PriereEntity
{
    protected $_priereId;
    protected $_email;
    protected $_datePriere;
    protected $_tempsDebut;
    protected $_tempsFin;
    protected $_dateAjout;

    /**
     * UserEntity constructor.
     * @param $_priereId
     * @param $_email
     * @param $_datePriere
     * @param $_tempsDebut
     * @param $_tempsFin
     * @param $_dateAjout
     */
    public function __construct($_priereId, $_email, $_datePriere, $_tempsDebut, $_tempsFin, $_dateAjout)
    {
        $this->_priereId = $_priereId;
        $this->_email = $_email;
        $this->_datePriere = $_datePriere;
        $this->_tempsDebut = $_tempsDebut;
        $this->_tempsFin = $_tempsFin;
        $this->_dateAjout = $_dateAjout;
    }

    /**
     * @return mixed
     */
    public function getPriereId()
    {
        return $this->_priereId;
    }

    /**
     * @param mixed $priereId
     */
    public function setPriereId($priereId)
    {
        $this->_priereId = $priereId;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getDatePriere()
    {
        return $this->_datePriere;
    }

    /**
     * @param mixed $datePriere
     */
    public function setDatePriere($datePriere)
    {
        $this->_datePriere = $datePriere;
    }

    /**
     * @return mixed
     */
    public function getTempsDebut()
    {
        return $this->_tempsDebut;
    }

    /**
     * @param mixed $tempsDebut
     */
    public function setTempsDebut($tempsDebut)
    {
        $this->_tempsDebut = $tempsDebut;
    }

    /**
     * @return mixed
     */
    public function getTempsFin()
    {
        return $this->_tempsFin;
    }

    /**
     * @param mixed $tempsFin
     */
    public function setTempsFin($tempsFin)
    {
        $this->_tempsFin = $tempsFin;
    }

    /**
     * @return mixed
     */
    public function getDateAjout()
    {
        return $this->_dateAjout;
    }

    /**
     * @param mixed $dateAjout
     */
    public function setDateAjout($dateAjout)
    {
        $this->_dateAjout = $dateAjout;
    }

    

}