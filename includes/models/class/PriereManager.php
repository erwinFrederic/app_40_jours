<?php

class PriereManager {
    private $_db;

    public function __construct($db) {
        $this->setDB($db);
    }

    // setters
    public function setDB($db) {
        $this->_db = $db;
    }

    // CRUD
    public function getAllPriere () {
        $request = $this->_db->query("
            SELECT *
            FROM priere
        ");

        $allPriere = [];
        while ($data = $request->fetch(PDO::FETCH_ASSOC)) {
            $allPriere[] = $data;
        }
        
        return $allPriere;
    }

    public function getPriereByDay ($priereDate) {
        $request = $this->_db->prepare("
            SELECT *
            FROM priere
            WHERE date_priere = :priereDate
        ");
        
        $request->bindValue(
            ':priereDate', $priereDate, PDO::PARAM_STR
        );

        $priereByDate = [];
        while ($data = $request->fetch(PDO::FETCH_ASSOC)) {
            $allPriere[] = $data;
        }

        return $priereByDate;
    }

}
