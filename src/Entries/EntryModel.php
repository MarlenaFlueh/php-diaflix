<?php

namespace App\Entries;

use PDO;
use App\Core\AbstractModel;

class EntryModel extends AbstractModel
{
    public function setNewEntry($userid, $title, $entry)
    {
        $stmt = $this->pdo->prepare(
            "INSERT INTO `entries` (`user_id`, `title`, `entry`) VALUES (:user_id, :title, :entry)"
        );
        $stmt->execute([
            'user_id' => $userid,
            'title' => $title,
            'entry' => $entry
        ]);
    }

    public function getFilteredEntries($userid)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM `entries` WHERE user_id = :userid");
        $stmt->execute(['userid' => $userid]);
        return $stmt;
    }
}
