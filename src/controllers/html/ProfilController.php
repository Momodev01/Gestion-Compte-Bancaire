<?php

require_once "../src/models/ProfilModel.php";

class ProfilController {
    private ProfilModel $profilModel;

    public function __construct() {
        $this->profilModel = new ProfilModel();
        $this-> load();
    }

    public function load() {
        $this-> listerProfils();
    }

    private function listerProfils() {
        $data = $this-> profilModel-> findAllProfils();
        require_once "../views/profils/listeProfils.html.php";
    }
}