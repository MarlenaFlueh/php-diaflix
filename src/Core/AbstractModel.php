<?php

namespace App\Core;

use PDO;

class AbstractModel
{
    private $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
}