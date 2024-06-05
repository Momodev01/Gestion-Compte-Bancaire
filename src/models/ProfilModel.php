<?php

require "../src/core/Model.php";

class ProfilModel extends Model {

    public function findAllProfils() {
        $sql = "SELECT * FROM profil";
        return $this->executeSelect($sql);
    }
}