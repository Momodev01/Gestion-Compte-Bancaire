<?php
namespace App\Models;
use App\Core\Model;
class TransactionModel extends Model {

    public function findAllTransactions() {
        $sql = "SELECT * FROM transaction t, compte c, users u
                WHERE t.idc = c.idc AND t.idu = u.idu";
        return $this-> executeSelect($sql);
    }
}
