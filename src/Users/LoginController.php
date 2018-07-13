<?php

namespace App\Users;

use App\Entries\EntryController;

class LoginController
{
    protected function render($view, $parameter)
    {
        extract($parameter);
        include __DIR__ . "/../../views/users/{$view}.php";
    }

    public function login($pdo)
    {
       /* var_dump(password_hash("test", PASSWORD_DEFAULT)); */
        $error = null;
        $model = new UserModel($pdo);
        if (!empty($_POST['username']) AND !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = $model->getSingleUser($username);
            if (!empty($user)) {
                if (password_verify($password, $user->password)) {
                   echo "Login successful!";
                   die();
                } else {
                    $error = "Incorrect password.";
                }
            } else {
                $error = "Ups, login failed...";
            }
        }
        $this->render("login", [
            'error' => $error
        ]);
    }
}

?>