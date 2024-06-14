<?php

require_once "../src/models/CompteModel.php";

class CompteController extends Controller {
    private CompteModel $compteModel;

    public function __construct() {
        $this->compteModel = new CompteModel();
        $this-> load();
    }

    public function load() {
        $this-> listerComptes();
    }

    private function listerComptes() {
        parent::renderJson($this->compteModel->findAllComptes());
    }
}