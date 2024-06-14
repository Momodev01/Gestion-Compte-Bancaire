<?php

require_once "../src/models/UsersModel.php";
require_once "../src/core/Controller.php";

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
        parent::renderView("clients/listeClients", ['data' => $this-> clientModel-> findUsersByProfil("Client")]);
    }
}