<?php

/**
 * Class InscriptionManager
 */
class InscriptionManager {
    /**
     * @var
     */
    private $_db;

    /**
     * InscriptionManager constructor.
     * @param $db
     */
    public function __construct($db) {
        $this->setDB($db);
    }

    // setters
    /**
     * @param $db
     */
    public function setDB($db) {
        $this->_db = $db;
    }

    // CRUD
    /**
     * @return array
     */
    public function getAllInscription () {
        $request = $this->_db->query("
            SELECT *
            FROM inscription
        ");

        $allPriere = [];
        while ($data = $request->fetch(PDO::FETCH_ASSOC)) {
            $allPriere[] = $data;
        }

        return $allPriere;
    }

    /**
     * @param $theMail
     * @return array
     */
    public function getInscriptionByMail ($theMail) {
        $request = $this->_db->prepare("
            SELECT *
            FROM inscription
            WHERE inscription.email = :inscription_mail
        ");

        $request->bindValue(
            ':inscription_mail', $theMail, PDO::PARAM_STR
        );

        $request->execute();
        
        $allInscription = [];
        while ($data = $request->fetch(PDO::FETCH_ASSOC)) {
            $allInscription[] = $data;
        }

        return $allInscription;
    }

}

?>