<?php
namespace App\Controllers\Html;
use App\Core\Controller;
use App\Models\AgenceModel;


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
        parent::renderView("agence/listeAgences", ['data' => $this-> agenceModel-> findAllAgences()]);
    }
}
