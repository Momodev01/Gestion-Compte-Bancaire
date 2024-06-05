<?php

require_once "../src/models/TypecptModel.php";

class TypecptController {
    private TypecptModel $typecptModel;

    public function __construct(){
        $this-> typecptModel = new TypecptModel();
        $this-> load();
    }

    public function load(){
        $this-> listerTypecpt();
    }

    public function listerTypecpt(){
        $data = $this-> typecptModel-> findAll();
        require_once "../views/typecpt/listeTypecpt.html.php";
    }
}