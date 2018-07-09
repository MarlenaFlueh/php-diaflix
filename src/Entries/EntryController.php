<?php

use PDO;

class EntryController
{
    public $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function showEntries()
    {
        $entries = $pdo->query("SELECT * FROM `entries`");
        return $entries;
    }
}