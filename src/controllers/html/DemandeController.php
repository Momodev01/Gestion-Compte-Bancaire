<?php
namespace App\Controllers\Html;
use App\Core\Controller;
use App\Models\DemandeModel;


class DemandeController extends Controller {
    private DemandeModel $demandeModel;

    public function __construct() {
        $this->demandeModel = new DemandeModel();
        $this-> load();
    }

    public function load() {
        $this-> listerDemandes();
    }

    private function listerDemandes() {
        parent::renderView("demandes/listeDemandes", ['data' => $this-> demandeModel-> findAllWithClient()]);
    }
    protected function listerDemandesClient() {
        parent::renderView("demandes/listeDemandesClient", ['data' => $this-> demandeModel-> findAllWithClient()]);
    }
}
