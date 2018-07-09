<?php

$pdo = new PDO('mysql:host=localhost;dbname=diary;charset=utf8', 'diary', 'PzjZJ4g5dfV623R1');
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

function fetchEntries()
{
    global $pdo;
    return $pdo->query("SELECT * FROM `entries`");
}

?>
