<?php
namespace App\Controllers\Html;
use App\Core\Controller;
use App\Models\TypecptModel;


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
