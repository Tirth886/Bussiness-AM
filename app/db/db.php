<?php

namespace App\DB;

use Exception;
use mysqli;

class Connection
{
    public function connect()
    {

        try {
            $con = new mysqli(getenv("DB_HOST"), getenv("DB_USER"), getenv("DB_PASS"), getenv("DB_NAME"));
            return $con;
        } catch (Exception $e) {
            print_r($e);
            exit;
        }
    }
}