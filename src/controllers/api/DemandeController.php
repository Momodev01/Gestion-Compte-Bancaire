<?php

require_once "../src/models/DemandeModel.php";

class DemandeController extends Controller {
    private DemandeModel $demandeModel;

    public function __construct() {
        $this->demandeModel = new DemandeModel();
        $this-> load();
    }

    public function load() {
        $this-> listerDemandes();
    }

    private function listerDemandes() {
        parent::renderJson($this-> demandeModel-> findAllWithClient());
    }
}