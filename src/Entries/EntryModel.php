<?php

namespace App\Entries;

use PDO;

class EntryModel
{
    private $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllEntries()
    {
        return $this->pdo->query("SELECT * FROM `entries`");
    }
}
