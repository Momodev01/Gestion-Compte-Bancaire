<?php

require_once "../src/models/ProfilModel.php";
require_once "../src/core/Controller.php";

class ProfilController extends Controller {
    private ProfilModel $profilModel;

    public function __construct() {
        $this->profilModel = new ProfilModel();
        $this-> load();
    }

    public function load() {
        $this-> listerProfils();
    }

    private function listerProfils() {
        parent::renderView("profils/listeProfils", ['data' => $this-> profilModel-> findAllProfils()]);
    }
}
