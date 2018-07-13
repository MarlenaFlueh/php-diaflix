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

    public function login($pdo)
    {
       /* var_dump(password_hash("test", PASSWORD_DEFAULT)); test-username: Merle */
        $error = null;
        $model = new UserModel($pdo);
        if (!empty($_POST['username']) AND !empty($_POST['password'])) {
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
        $this->render("login", [
            'error' => $error
        ]);
    }
}

?>
