<?php

require_once "../src/models/RecuModel.php";

class RecuController extends Controller {
    private RecuModel $recuModel;

    public function __construct() {
        $this->recuModel = new RecuModel();
        $this-> load();
    }

    public function load() {
        $this-> listerRecues();
    }

    private function listerRecues() {
        parent::renderJson($this-> recuModel-> findAllRecues());
    }
}