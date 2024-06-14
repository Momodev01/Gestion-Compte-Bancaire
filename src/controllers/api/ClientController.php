<?php

require_once "../src/models/UsersModel.php";

class ClientController extends Controller {
    private UsersModel $clientModel;
    
    public function __construct(){
        $this-> clientModel = new UsersModel();
        $this-> load();
    }

    public function load(){
        $this-> listerClients();
    }

    public function listerClients(){
        parent::renderJson($this-> clientModel-> findUsersByProfil("Client"));
    }
}