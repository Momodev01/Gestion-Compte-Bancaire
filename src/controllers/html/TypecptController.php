<?php

require_once "../src/models/TypecptModel.php";
require_once "../src/core/Controller.php";

class TypecptController extends Controller {
    private TypecptModel $typecptModel;

    public function __construct(){
        $this-> typecptModel = new TypecptModel();
        $this-> load();
    }

    public function load(){
        $this-> listerTypecpt();
    }

    public function listerTypecpt(){
        parent::renderView("typecpt/listeTypecpt", ['data' => $this-> typecptModel-> findAll()]);
    }
}