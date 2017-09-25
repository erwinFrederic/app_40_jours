<?php

class InscriptionEntity
{
    protected $_id;
    protected $_nom;
    protected $_prenom;
    protected $_email;
    protected $_pays;
    protected $_eglise;
    protected $_egliseAutre;
    protected $_adresse;
    protected $_tel;
    protected $_dateAjout;
    protected $_dateModification;

    /**
     * UserEntity constructor.
     * @param $_id
     * @param $_nom
     * @param $_prenom
     * @param $_email
     * @param $_pays
     * @param $_eglise
     * @param $_egliseAutre
     * @param $_adresse
     * @param $_tel
     * @param $_dateAjout
     * @param $_dateModification
     */
    public function __construct($_id, $_nom, $_prenom, $_email, $_pays, $_eglise, $_egliseAutre, $_adresse, $_tel, $_dateAjout, $_dateModification)
    {
        $this->_id = $_id;
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_email = $_email;
        $this->_pays = $_pays;
        $this->_eglise = $_eglise;
        $this->_egliseAutre = $_egliseAutre;
        $this->_adresse = $_adresse;
        $this->_tel = $_tel;
        $this->_dateAjout = $_dateAjout;
        $this->_dateModification = $_dateModification;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->_prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
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
    public function getPays()
    {
        return $this->_pays;
    }

    /**
     * @param mixed $pays
     */
    public function setPays($pays)
    {
        $this->_pays = $pays;
    }

    /**
     * @return mixed
     */
    public function getEglise()
    {
        return $this->_eglise;
    }

    /**
     * @param mixed $eglise
     */
    public function setEglise($eglise)
    {
        $this->_eglise = $eglise;
    }

    /**
     * @return mixed
     */
    public function getEgliseAutre()
    {
        return $this->_egliseAutre;
    }

    /**
     * @param mixed $egliseAutre
     */
    public function setEgliseAutre($egliseAutre)
    {
        $this->_egliseAutre = $egliseAutre;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->_adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->_adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->_tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->_tel = $tel;
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

    /**
     * @return mixed
     */
    public function getDateModification()
    {
        return $this->_dateModification;
    }

    /**
     * @param mixed $dateModification
     */
    public function setDateModification($dateModification)
    {
        $this->_dateModification = $dateModification;
    }

 

}