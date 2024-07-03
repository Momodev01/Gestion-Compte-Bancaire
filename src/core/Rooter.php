<?php
class  Rooter {

    public static function run() {
        if (isset($_REQUEST['ressource'])) {
            $ressource = $_REQUEST['ressource'];
            if (isset($_REQUEST['controller'])) {
                $controller = ucfirst($_REQUEST['controller']).'Controller';
                $fileController = "../src/controllers/$ressource/$controller.php";
                if (file_exists($fileController)) {
                    require_once $fileController;
                    $controller = new $controller();
                } else {
                    require_once "../src/controllers/html/ErreurController.php";
                    $controller = new ErreurController();
                }
                
            }
        }
        else {
            require_once "../src/controllers/html/SecurityController.php";
            $security = new SecurityController();
        }
    }
}
