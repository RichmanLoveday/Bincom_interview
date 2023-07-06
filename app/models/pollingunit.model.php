<?php

use app\core\Database;
use app\core\Models;

class Pollingunit extends Models
{
    public function get_all_polling_unit()
    {

        $DB = Database::newInstance();
        $query = "SELECT * FROM polling_unit order by uniqueid desc";
        $result = $DB->read($query);

        if (is_array($result)) {
            return $result;
        }

        return false;
    }

    public function get_polling_unit_by_id($uniqueid)
    {
        $DB = Database::newInstance();
        $query = "SELECT * FROM polling_unit where uniqueid = :uniqueid limit 1";
        $result = $DB->read($query, ['uniqueid' => $uniqueid]);

        if (is_array($result)) {
            return $result[0];
        }

        return false;
    }

    public function polling_unit_results()
    {
        $DB = Database::newInstance();
        $query = "SELECT * FROM announced_pu_results order by result_id desc";
        $result = $DB->read($query);

        if (is_array($result)) {
            return $result;
        }

        return false;
    }

    public function polling_unit_result_by_id($id)
    {
        $DB = Database::newInstance();
        $query = "SELECT * FROM announced_pu_results where polling_unit_uniqueid = :id order by result_id desc";
        $result = $DB->read($query, ['id' => $id]);

        if (is_array($result)) {
            return $result;
        }

        return false;
    }

    public function get_polling_units_and_results()
    {
        $DB = Database::newInstance();
        $query = "SELECT polling.*, announced_pu_results.party_score as results from polling_unit as polling join announced_pu_results on polling.uniqueid = announced_pu_results.polling_unit_uniqueid";
        $result = $DB->read($query);

        if (is_array($result)) {
            return $result;
        }

        return false;
    }
}