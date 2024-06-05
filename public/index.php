<?php
define('WEBROOT', "http://localhost:7000");

    if (isset($_REQUEST['ressource'])) {
        $ressource = $_REQUEST['ressource'];
        if (isset($_REQUEST['controller'])) {
            $controller = ucfirst($_REQUEST['controller']).'Controller';
            require_once "../src/controllers/$ressource/$controller.php";
            $control = new $controller();
        }
    }
    else {
        require_once "../src/controllers/html/CompteController.php";
        $compte = new CompteController();
    }
