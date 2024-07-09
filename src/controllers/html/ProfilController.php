<?php
namespace App\Controllers\Html;
use App\Core\Controller;
use App\Models\ProfilModel;


class ProfilController extends Controller {
    private ProfilModel $profilModel;

    public function __construct() {
        $this->profilModel = new ProfilModel();
        $this-> load();
    }

    public function load() {
        $this-> listerProfils();
    }

    private function listerProfils() {
        parent::renderView("profils/listeProfils", ['data' => $this-> profilModel-> findAllProfils()]);
    }
}
