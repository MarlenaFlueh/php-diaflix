<?php

namespace App\Core;

class AbstractController
{
    protected function render($view)
    {
        include __DIR__ . "/../../views/{$view}.php";
    }

    protected function renderParam($view, $parameter)
    {
        extract($parameter);
        include __DIR__ . "/../../views/{$view}.php";
    }

    protected function checkInput()
    {
        if (!empty($_POST['username']) and !empty($_POST['password'])) {
            return true;
        } else {
            return false;
        }
    }
}