<?php

require_once "../src/models/TypecptModel.php";

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
        parent::renderJson($this-> typecptModel-> findAll());
    }
}