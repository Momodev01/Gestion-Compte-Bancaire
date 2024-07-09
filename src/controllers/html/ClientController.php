<?php
namespace App\Controllers\Html;
use App\Core\Controller;
use App\Models\UsersModel;


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
