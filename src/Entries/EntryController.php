<?php

namespace App\Entries;

class EntryController
{
    function fetchEntries($pdo)
    {
        $allEntries = new EntryModel($pdo);
        return $allEntries->getAllEntries();
    }
}
