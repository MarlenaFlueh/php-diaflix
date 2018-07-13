<?php

namespace App\Users;

use PDO;

class UserModel
{
    private $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getSingleUser($username, $password)
    {
       $stmt = $this->pdo->prepare("SELECT `username`, `password` FROM `users` WHERE username = :username AND password = :password");
       $stmt->execute(['username' => $username, 'password' => $password]);
       $user = $stmt->fetch(PDO::FETCH_OBJ);
       return $user;
    }
}

?>
