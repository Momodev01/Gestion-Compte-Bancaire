<?php

require_once "../src/models/UsersModel.php";

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
        parent::renderJson($this-> uModel-> findAllUsers());
    }
}