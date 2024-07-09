<?php
namespace App\Controllers\Html;
use App\Core\Controller;
use App\Models\RecuModel;


class RecuController extends Controller {
    private RecuModel $recuModel;

    public function __construct() {
        $this->recuModel = new RecuModel();
        $this-> load();
    }

    public function load() {
        $this-> listerRecues();
    }

    private function listerRecues() {
        parent::renderView("recues/listeRecues", ['data' => $this-> recuModel-> findAllRecues()]);
    }
}
