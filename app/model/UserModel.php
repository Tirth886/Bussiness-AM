<?php

namespace App\Model;

use App\DB\Connection as DB;

use Helper;

class UserModel
{
    private string $table = "tbl_users";
    private string $query = "";
    private object $raw;
    use Helper;

    protected $DB;

    public function __construct()
    {
        $con = new DB;
        $con = $con->connect();
        $this->DB = $con;
    }

    public function select(array $where)
    {
        $condition = "";
        foreach ($where as $key => $value) {
            $condition .= "$key = '$value' AND ";
        }
        $condition = rtrim($condition, " AND ");
        $table = $this->table;
        $query = "SELECT id,name,email,phone,created_at FROM {$table} WHERE {$condition}";
        $this->query = $query;
        return $this;
    }


    public function execute()
    {
        $raw = $this->DB->query($this->query);
        $this->raw = $raw;
        return $this;
    }

    public function single()
    {
        return $this->raw->fetch_object();
    }

    public function multiple()
    {
        # looping Data
    }
}
