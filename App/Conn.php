<?php

namespace App;

class Conn
{
    public static function getDb()
    {
        return new \PDO("mysql:host=localhost;dbname=controle_estoque","root","102030");
    }
}
