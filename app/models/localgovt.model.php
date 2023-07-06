<?php

use app\core\Database;
use app\core\Models;

class LocalGovt extends Models
{

    public function get_all_local_govt()
    {
        $DB = Database::newInstance();
        $query = "SELECT * FROM lga order by uniqueid desc";
        $result = $DB->read($query);

        if (is_array($result)) {
            return $result;
        }

        return false;
    }

    public function get_local_qovt_by_id($id)
    {
        $DB = Database::newInstance();
        $query = "SELECT * FROM lga where uniqueid = :id limit 1";
        $result = $DB->read($query, ['id' => $id]);

        if (is_array($result)) {
            return $result;
        }

        return false;
    }

    public function get_local_qovt_pulling_unit_by_id($id)
    {
        $DB = Database::newInstance();
        $query = "SELECT lga.*, polling_unit.lga_id, polling_unit.uniqueid as polling_id from lga join polling_unit on polling_unit.lga_id = lga.uniqueid where polling_id = :id";
        $result = $DB->write($query, ['id' => $id]);

        if (is_array($result)) {
            return $result;
        }
        return false;
    }
}