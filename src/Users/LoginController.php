<?php

namespace App\Users;

use App\Entries\EntryController;
use App\Core\AbstractController;

class LoginController extends AbstractController
{
    public function checkSessionStatus($pdo)
    {
        if (isset($_SESSION['login'])) {
            $entryModel = new EntryController();
            $entryModel->fetchEntries($pdo);
        } else {
            echo "Just available for memebers.";
        }
    }

    public function logout()
    {
        unset($_SESSION['login']);
        session_regenerate_id(true);
        header("Location: index");
    }

    /* var_dump(password_hash("test", PASSWORD_DEFAULT)); test-username: Merle */
    public function login($pdo)
    {
        $error = null;
        $model = new UserModel($pdo);
        if ($this->checkInput()) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = $model->getSingleUser($username);
            if (!empty($user)) {
                if (password_verify($password, $user->password)) {
                    $_SESSION['login'] = $user->username;
                    session_regenerate_id(true);
                    header("Location: entries");
                } else {
                    $error = "Incorrect password.";
                }
            } else {
                $error = "Ups, login failed...";
            }
        }
        $this->renderParam("users/login", [
            'error' => $error
        ]);
    }
}

?>
