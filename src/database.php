<?php

$pdo = new PDO('mysql:host=localhost;dbname=diary;charset=utf8', 'root', '');
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

function fetchEntries()
{
    global $pdo;
    return $pdo->query("SELECT * FROM `entries`");
}

?>
