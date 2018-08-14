<?php

namespace App\Models;

class User
{
    protected $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;        
    }

    public function fetchAll()
    {
        $query = "select * from users";
        return $this->db->query($query);
    }
}
