<?php

require_once "../src/models/UsersModel.php";

class ClientController {
    private UsersModel $clientModel;
    
    public function __construct(){
        $this-> clientModel = new UsersModel();
        $this-> load();
    }

    public function load(){
        $this-> listerClients();
    }

    public function listerClients(){
        $data = $this-> clientModel-> findUsersByProfil("Client");
        echo json_encode($data);
    }
}