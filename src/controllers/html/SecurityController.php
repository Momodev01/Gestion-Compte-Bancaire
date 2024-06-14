<?php

require_once "../src/models/SecurityModel.php";
require_once "../src/core/Controller.php";

class SecurityController extends Controller {
    private SecurityModel $securityModel;

    public function __construct() {
        $this->securityModel = new SecurityModel();
        $this-> load();
    }

    public function load() {
        $this-> logView();
    }

    private function logView() {
        if (isset($_REQUEST['action'])) {
            if ($_REQUEST["action"] == "logout") {
                unset($_SESSION["userConnect"]);
                session_destroy();
                header("location:".WEBROOT);
            }
            elseif ($_REQUEST['action'] == 'login') {
                if (isset($_POST['email']) && isset($_POST['pwd'])) {
                    $username = $_POST['email'];
                    $password = $_POST['pwd'];
    
                    $userConnect = $this->securityModel->findUserConnect($username, $password);
                    $_SESSION['userConnect'] = $userConnect;
                    if ($userConnect != null) {
                        if ($_SESSION['userConnect'][0]['libp'] == 'Client') {
                            $this->redirectToRoot('ressource=html&controller=Client');
                        }
                        elseif ($_SESSION['userConnect'][0]['libp'] == 'Respo Guichet') {
                            echo 'Je suis le RG';
                            // $this->redirectToRoot('ressource=html&controller=Demande');
                        }
                        elseif ($_SESSION['userConnect'][0]['libp'] == 'Chargé Client') {
                            echo 'Je suis le CC';
                            // $this->redirectToRoot('ressource=html&controller=Demande');
                        }
                        
                    } else {
                        header("location:".WEBROOT);
                    }
                }
            }
            else {
                header("location:".WEBROOT);
            }
        } else {
            require_once "../views/security/login.html.php";
        }
    }

}
