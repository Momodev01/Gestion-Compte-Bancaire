<?php
namespace App\Models;
use App\Core\Model;

class CompteModel extends Model {

    public function findAllComptes() {
        $sql = "SELECT * FROM compte c, typecpt tc, agence a, users u, demande d
                WHERE c.ida = a.ida AND c.idtc = tc.idtc AND c.idu = u.idu AND c.idd = d.idd";
        return $this->executeSelect($sql);
    }

}
