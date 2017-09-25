<?php

class UserEntity
{
    protected $_priere_id;
    protected $_email;
    protected $_date_priere;
    protected $_temps_debut;
    protected $_temps_fin;
    protected $_date_ajout;

    /**
     * @return mixed
     */
    public function getPriereId()
    {
        return $this->_priere_id;
    }

    /**
     * @param mixed $priere_id
     */
    public function setPriereId($priere_id)
    {
        $this->_priere_id = $priere_id;
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
        return $this->_date_priere;
    }

    /**
     * @param mixed $date_priere
     */
    public function setDatePriere($date_priere)
    {
        $this->_date_priere = $date_priere;
    }

    /**
     * @return mixed
     */
    public function getTempsDebut()
    {
        return $this->_temps_debut;
    }

    /**
     * @param mixed $temps_debut
     */
    public function setTempsDebut($temps_debut)
    {
        $this->_temps_debut = $temps_debut;
    }

    /**
     * @return mixed
     */
    public function getTempsFin()
    {
        return $this->_temps_fin;
    }

    /**
     * @param mixed $temps_fin
     */
    public function setTempsFin($temps_fin)
    {
        $this->_temps_fin = $temps_fin;
    }

    /**
     * @return mixed
     */
    public function getDateAjout()
    {
        return $this->_date_ajout;
    }

    /**
     * @param mixed $date_ajout
     */
    public function setDateAjout($date_ajout)
    {
        $this->_date_ajout = $date_ajout;
    }


}