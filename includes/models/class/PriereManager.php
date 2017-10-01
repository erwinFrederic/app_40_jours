<?php

class PriereManager {
    private $_db;

    public function __construct($db) {
        $this->setDB($db);
    }

    // setters
    public function setDB(PDO $db) {
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
            AND notified IS NULL
        ");

        // var_dump($request);

        $request->bindValue(
            ':priereDate', $priereDate, PDO::PARAM_STR
        );
        $request->execute();

        $priereByDate = [];
        while ($data = $request->fetch(PDO::FETCH_ASSOC)) {
            $priereByDate[] = $data;
        }

        return $priereByDate;
    }

    public function notifiedPriere(PriereEntity $priere) {
        if (!empty($priere->getPriereId())) {
            $request = $this->_db->prepare("
                UPDATE priere
                SET notified = 1
                WHERE priere_id = :priereId
            ");

            $request->bindValue(
                ':priereId', $priere->getPriereId(), PDO::PARAM_INT
            );
            $result = $request->execute();
            var_dump($priere->getPriereId());
            // var_dump($result);
            if ($result) {
                return True;
            }
        }
    }

}
