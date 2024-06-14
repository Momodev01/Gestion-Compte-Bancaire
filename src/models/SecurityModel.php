<?php

require "../src/core/Model.php";

class SecurityModel extends Model {

    public function findUserConnect($email, $pwd) {
        $sql = "SELECT * FROM users u, profil p WHERE u.email LIKE '$email'
                AND u.pwd LIKE '$pwd' AND u.idp = p.idp";
        return $this-> executeSelecte($sql);
    }
}
