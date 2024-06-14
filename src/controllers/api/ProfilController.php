<?php

require_once "../src/models/ProfilModel.php";

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
        parent::renderJson($this-> profilModel-> findAllProfils());
    }
}