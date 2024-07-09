<?php
namespace App\Controllers\Html;
use App\Models\UsersModel;
use App\Core\ {
    Session,
    Autorisation,
    Validator,
    Controller
};

class SecurityController extends Controller {

    private UsersModel $securityModel;

    public function __construct()
    {
        session_start();
        $this->layout = 'connexion';
        $this->securityModel = new UsersModel();
        $this-> load();
    }

    public function load()
    {
        if (isset($_REQUEST['action'])) {
            if ($_REQUEST['action'] == 'login') {
                $this-> login();
            }
            elseif ($_REQUEST['action'] == 'logout') {
                Session::close();
                parent::redirectToRoot('html', 'Security', 'logout');
            }
            elseif ($_REQUEST['action'] == 'show-form') {
                $this-> showForm();
            }
            
        } else {
            $this-> showForm();
        }
        
    }

    private function showForm()
    {
        parent::renderView('security/login');
    }

    public function redirectAfterConnect(string $role)
    {
        switch (Autorisation::getRole()) {
            case 'Client':
                parent::redirectToRoot('html', 'Client');
                exit;
            case 'Respo Guichet':
                parent::redirectToRoot('html', 'Compte');
                exit;
            case 'Chargé Client':
                parent::redirectToRoot('html', 'Demande');
                exit;
            
            default:
                # code...
                break;
        }
    }

    private function login() {
        if (!Validator::isEmpty('email')) {
            Validator::isEmail('email');
        }
        Validator::isEmpty('pwd');
        if (Validator::validate()) {
            $connected = $this-> securityModel-> connexion($_POST['email'], $_POST['pwd']);
            if ($connected) {
                Session::setObject('userConnected', $connected[0]);
                $this-> redirectAfterConnect($connected[0]['libp']);
            }
        }
        else {
            parent::renderView('security/login', ['errors' => Validator::$errors]);
        }
    }

}
