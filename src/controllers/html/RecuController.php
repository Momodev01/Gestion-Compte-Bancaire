<?php

require_once "../src/models/RecuModel.php";

class RecuController {
    private RecuModel $recuModel;

    public function __construct() {
        $this->recuModel = new RecuModel();
        $this-> load();
    }

    public function load() {
        $this-> listerRecues();
    }

    private function listerRecues() {
        $data = $this-> recuModel-> findAllRecues();
        require_once "../views/recues/listeRecues.html.php";
    }
}