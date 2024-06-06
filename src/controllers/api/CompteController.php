<?php

require_once "../src/models/CompteModel.php";

class CompteController {
    private CompteModel $compteModel;

    public function __construct() {
        $this->compteModel = new CompteModel();
        $this-> load();
    }

    public function load() {
        $this-> listerComptes();
    }

    private function listerComptes() {
        $data = $this->compteModel->findAllComptes();
        echo json_encode($data);
    }
}