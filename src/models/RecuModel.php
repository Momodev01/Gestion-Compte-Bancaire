<?php
namespace App\Models;
use App\Core\Model;

class RecuModel extends Model {

    public function findAllRecues() {
        $sql = "SELECT * FROM recu r, transaction tr, transrecu , users u, compte c, comptrecu cr
        WHERE r.idr = transrecu.idr AND tr.idtr = transrecu.idtr AND cr.idr = r.idr
        AND cr.idc = c.idc AND transrecu.idr = transrecu.idtr AND tr.idu = u.idu;";
        return $this->executeSelect($sql);
    }
}
