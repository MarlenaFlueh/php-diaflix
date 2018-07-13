<?php

require __DIR__ . "/../database.php";
require __DIR__ . "/../autoload.php";

$path = $_SERVER['PATH_INFO'];

if ($path == "/entries") {
  $controller = new App\Entries\EntryController();
 $controller->fetchEntries($pdo);
} elseif ($path == "/index") {
  $controller = new App\Entries\EntryController();
  $controller->index();
} elseif ($path == "/login") {
  $controller = new App\Users\LoginController();
  $controller->login($pdo);
} elseif ($path == "/register") {
  $controller = new App\Users\UserController();
  $controller->registered();
} elseif ($path == "/registerSuccess") {
  $controller = new App\Users\UserController();
  $controller->registeredSuccess();
}

?>
