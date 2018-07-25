<?php

namespace App\Users;

use PDO;
use App\Core\AbstractModel;

class UserModel extends AbstractModel
{
    public function getSingleUser($username)
    {
        $stmt = $this->pdo->prepare("SELECT `id`, `username`, `password` FROM `users` WHERE username = :username");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    public function fetchNewUser($username, $password)
    {
        $stmt = $this->pdo->prepare("INSERT INTO `users` (`username`, `password`) VALUES (:username, :password)");
        $stmt->execute([
            'username' => $username,
            'password' => $password
        ]);
    }
}

?>
