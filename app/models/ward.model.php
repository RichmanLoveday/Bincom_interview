<?php

use app\core\Database;
use app\core\Models;

class Ward extends Models
{
    public function get_all_ward()
    {

        $DB = Database::newInstance();
        $query = "SELECT * FROM ward order by uniqueid desc";
        $result = $DB->read($query);

        if (is_array($result)) {
            return $result;
        }

        return false;
    }
}
