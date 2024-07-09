<?php
namespace App\Controllers\Html;
use App\Core\Controller;
use App\Models\CompteModel;



class CompteController extends Controller {
    private CompteModel $compteModel;

    public function __construct() {
        $this->compteModel = new CompteModel();
        $this-> load();
    }

    public function load() {
        $this-> listerComptes();
    }

    private function listerComptes() {
        parent::renderView("comptes/listeComptes", ['data' => $this-> compteModel->findAllComptes()]);
    }
}
