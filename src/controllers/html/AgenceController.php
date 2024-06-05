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
        require_once "../views/agence/listeAgences.html.php";
    }
}