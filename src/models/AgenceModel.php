<?php

require "../src/core/Model.php";

class AgenceModel extends Model {

    public function findAllAgences() {
        $sql = "SELECT * FROM agence";
        return $this-> executeSelect($sql);
    }
}