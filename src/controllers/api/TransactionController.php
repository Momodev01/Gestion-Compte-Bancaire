<?php

require_once "../src/models/TransactionModel.php";

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
        parent::renderJson($this-> transactionModel-> findAllTransactions());
    }
}