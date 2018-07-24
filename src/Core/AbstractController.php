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
}