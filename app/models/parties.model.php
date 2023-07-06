<?php

use app\core\Database;
use app\core\Models;

class Parties extends Models
{
    public function get_all_party()
    {
        $DB = Database::newInstance();
        $query = "SELECT * FROM party order by id desc";
        $result = $DB->read($query);

        return is_array($result) ? $result : false;
    }
}