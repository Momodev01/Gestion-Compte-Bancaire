<?php
namespace App\Controllers\Html;
use App\Core\Controller;
use App\Models\UsersModel;


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
