<?php

require_once "../src/models/DemandeModel.php";

class DemandeController {
    private DemandeModel $demandeModel;

    public function __construct() {
        $this->demandeModel = new DemandeModel();
        $this-> load();
    }

    public function load() {
        $this-> listerDemandes();
    }

    private function listerDemandes() {
        $data = $this-> demandeModel-> findAllWithClient();
        echo json_encode($data);
    }
}