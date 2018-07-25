<?php

namespace App\Users;

use App\Core\AbstractController;

class UserController extends AbstractController
{
    public function registeredSuccess()
    {
        $this->render('users/registerSuccess');
    }

    public function registered($pdo)
    {
        $error = null;
        $model = new UserModel($pdo);
        if ($this->checkInput()) {
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $user = $model->getSingleUser($username);
            if (empty($user)) {
                $model->fetchNewUser($username, $password);
                header("Location: registerSuccess");
            } else {
                $error = "Username already exists.";
            }
        }
        $this->renderParam('users/register', [
            'error' => $error
        ]);
    }
}

?>
