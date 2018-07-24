<?php

namespace App\Users;

class UserController
{
    protected function render($view)
    {
        include __DIR__ . "/../../views/users/{$view}.php";
    }

    protected function renderParam($view, $parameter)
    {
        extract($parameter);
        include __DIR__ . "/../../views/users/{$view}.php";
    }

    public function registeredSuccess()
    {
        $this->render("registerSuccess");
    }

    public function registered($pdo)
    {
        $error = null;
        $model = new UserModel($pdo);
        if (!empty($_POST['username']) and !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $model->newUser($username, $password);
            $user = $model->getSingleUser($username);
            if (!empty($user)) {
                header("Location: registerSuccess");
            } else {
                $error = "Ups, auth failed...";
            }
        }
        $this->renderParam('register', [
            'error' => $error
        ]);
    }
}

?>
