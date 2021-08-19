<?php

namespace App\Tool;

use App\Tool\DBCore;

class DB
{

    public static function connect()
    {
        $db = new DBCore(getenv('DB_HOST'), getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASS'));
        return $db;
    }
}
