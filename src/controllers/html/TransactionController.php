<?php
namespace App\Controllers\Html;
use App\Core\Controller;
use App\Models\TransactionModel;


class TransactionController extends Controller {
    private TransactionModel $transactionModel;

    public function __construct() {
        $this->transactionModel = new TransactionModel();
        $this-> load();
    }

    public function load() {
        $this-> listerTransactions();
    }

    private function listerTransactions() {
        parent::renderView("transactions/listeTransactions", ['data' => $this-> transactionModel-> findAllTransactions()]);
    }
}
