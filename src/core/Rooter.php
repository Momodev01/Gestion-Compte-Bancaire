<?php
namespace App\Core;

use App\Controllers\Html\ {
    SecurityController,
    ErreurController
};


class  Rooter {
    public static function run() {
        if (isset($_REQUEST['ressource'])) {
            $ressource = $_REQUEST['ressource'];
            if (isset($_REQUEST['controller'])) {
                $controller = ucfirst($_REQUEST['controller']).'Controller';
                $namespace = "App\\Controllers\\$ressource\\";
                $controllerClass = $namespace . $controller;
                $fileController = "../src/controllers/$ressource/$controller.php";
                if (file_exists($fileController)) {
                    require_once $fileController;
                    $controller = new $controllerClass();
                } else {
                    $controller = new ErreurController();
                }

            }
        }
        else {
            $security = new SecurityController();
        }
    }
}
