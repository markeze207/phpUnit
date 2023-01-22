<?php

namespace App\Config;

use PDO;

class Database
{
    public function getConnection(): PDO
    {
        return new PDO("mysql:host=localhost;dbname=shop", "root", "");
    }
}