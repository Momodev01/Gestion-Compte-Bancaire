<?php

require_once "../src/core/Controller.php";

class ErreurController extends Controller {


    public function __construct() {
        $this-> load();
    }

    public function load() {
        $this-> showPage();
    }

    private function showPage() {
        require_once "../views/errors/404page.html.php";
    }

}
