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
        $error = null;
        $model = new UserModel($pdo);
        /* $entryController = new EntryController(); */
        if (!empty($_POST['username']) AND !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = $model->getSingleUser($username, $password);
            if (!empty($user)) {
                if ($user->password == $password) {
                   /* $entryController->fetchEntries($pdo); */
                   echo "Login successful!";
                   die();
                } else {
                    $error = "Error, login fail.";
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