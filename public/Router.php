<?php

$path = $_SERVER['PATH_INFO'];

$routes = [
    '/index' => [
        'controller' => 'userController',
        'method' => 'index'
    ],
    '/login' => [
        'controller' => 'userController',
        'method' => 'login'
    ],
    '/register' => [
        'controller' => 'userController',
        'method' => 'register'
    ],
    '/registerSuccess' => [
    'controller' => 'userController',
    'method' => 'showSuccess'
    ],
    '/entries' => [
        'controller' => 'entryController',
        'method' => 'showEntries'
    ]
];

if (isset($routes[$path])) {
    $route = $routes[$path];
    $activeController = $route['controller'];
    $method = $route['method'];
    $activeController->$method();
}

?>