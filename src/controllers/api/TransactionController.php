<?php

require_once "../src/models/TransactionModel.php";

class TransactionController {
    private TransactionModel $transactionModel;

    public function __construct() {
        $this->transactionModel = new TransactionModel();
        $this-> load();
    }

    public function load() {
        $this-> listerTransactions();
    }

    private function listerTransactions() {
        $data = $this-> transactionModel-> findAllTransactions();
        echo json_encode($data);
    }
}