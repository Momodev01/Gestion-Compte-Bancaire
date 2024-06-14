<?php

require_once "../src/models/AgenceModel.php";
require_once "../src/core/Controller.php";

class AgenceController extends Controller {
    private AgenceModel $agenceModel;

    public function __construct(){
        $this-> agenceModel = new AgenceModel();
        $this-> load();
    }

    public function load(){
        $this-> listerAgences();
    }

    public function listerAgences(){
        parent::renderJson($this-> agenceModel-> findAllAgences());
    }
}