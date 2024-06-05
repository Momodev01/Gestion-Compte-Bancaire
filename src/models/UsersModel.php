<?php

require "../src/core/Model.php";

class UsersModel extends Model {
    

    public function findUsersByProfil(string $profil) {
        $sql = "SELECT * FROM users u, profil p WHERE u.idp = p.idp AND libp LIKE '$profil'";
        return $this-> executeSelect($sql);
    }

    public function findAllUsers() {
        $sql = "SELECT * FROM users u, profil p WHERE u.idp = p.idp";
        return $this-> executeSelect($sql);
    }

}