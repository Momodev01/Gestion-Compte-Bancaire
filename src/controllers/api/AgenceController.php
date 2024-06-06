<?php

require_once "../src/models/AgenceModel.php";

class AgenceController {
    private AgenceModel $agenceModel;

    public function __construct(){
        $this-> agenceModel = new AgenceModel();
        $this-> load();
    }

    public function load(){
        $this-> listerAgences();
    }

    public function listerAgences(){
        $data = $this-> agenceModel-> findAllAgences();
        echo json_encode($data);
    }
}