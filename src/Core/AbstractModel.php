<?php

namespace App\Core;

use PDO;

class AbstractModel
{
    public $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
}