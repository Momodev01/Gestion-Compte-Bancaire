<?php

require_once "../src/models/UsersModel.php";
require_once "../src/core/Controller.php";

class UsersController extends Controller {
    private UsersModel $uModel;

    public function __construct(){
        $this-> uModel = new UsersModel;
        $this-> load();
    }

    public function load(){
        $this-> listerUsers();
    }

    public function listerUsers(){
        parent::renderView("users/listeUsers", ['data' => $this-> uModel-> findAllUsers()]);
    }
}