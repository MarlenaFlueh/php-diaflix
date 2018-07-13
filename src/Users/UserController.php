<?php

namespace App\Users;

class UserController
{
    protected function render($view)
    {
        include __DIR__ . "/../../views/users/{$view}.php";
    }

    public function registered()
    {
        $this->render("register");
    }

    public function registeredSuccess()
    {
        $this->render("registerSuccess");
    }
}

?>
