<?php

require_once "../src/models/CompteModel.php";
require_once "../src/core/Controller.php";


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
        parent::renderView("comptes/listeComptes", ['data' => $this-> compteModel->findAllComptes()]);
    }
}