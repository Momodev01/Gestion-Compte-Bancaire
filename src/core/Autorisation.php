<?php
require_once "../src/core/Controller.php";
class Autorisation {

    public static function isConnected() {
        return Session::keyExist('userConnected');
    }
    
    public static function hasRole(string $roleName):bool {
        return self::getRole() === $roleName;
    }
    
    public static function getRole(string $key = "libp"):string {
        return Session::get('userConnected')->{$key};
    }
}
