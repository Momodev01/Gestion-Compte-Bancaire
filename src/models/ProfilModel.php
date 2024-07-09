<?php
namespace App\Models;
use App\Core\Model;

class ProfilModel extends Model {

    public function findAllProfils() {
        $sql = "SELECT * FROM profil";
        return $this->executeSelect($sql);
    }
}
