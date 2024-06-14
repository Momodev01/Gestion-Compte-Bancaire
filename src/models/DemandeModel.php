<?php

require "../src/core/Model.php";

class DemandeModel extends Model{

    public function findAllWithClient() {
        $sql = "SELECT * FROM demande d, users u, typecpt tc WHERE d.`idu` = u.`idu` AND d.idtc = tc.idtc";
        return $this->executeSelect($sql);
    }
    public function findAllForClient() {
            $sql = "SELECT * FROM demande d, users u, typecpt tc WHERE d.`idu` = u.`idu` AND d.idtc = tc.idtc";
            return $this->executeSelect($sql);
    }


}