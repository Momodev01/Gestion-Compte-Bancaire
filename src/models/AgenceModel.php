<?php
namespace App\Models;
use App\Core\Model;


class AgenceModel extends Model {

    public function findAllAgences() {
        $sql = "SELECT * FROM agence";
        return $this-> executeSelect($sql);
    }
}
