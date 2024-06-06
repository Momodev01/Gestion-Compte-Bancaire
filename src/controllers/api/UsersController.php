<?php

require_once "../src/models/UsersModel.php";

class UsersController {
    private UsersModel $uModel;

    public function __construct(){
        $this-> uModel = new UsersModel;
        $this-> load();
    }

    public function load(){
        $this-> listerUsers();
    }

    public function listerUsers(){
        $data = $this->uModel-> findAllUsers();
        echo json_encode($data);
    }
}