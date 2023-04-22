<?php
require_once '../vendor/autoload.php';

session_start();

use App\Controllers\HomeController;
use App\Controllers\AuthController;

$requestUri = explode('?', $_SERVER['REQUEST_URI'], 2)[0];

switch ($requestUri) {
    case '/':
        $controller = new HomeController();
        echo $controller->index();
        break;

    case '/login':
        $controller = new AuthController();
        echo $controller->login();
        break;

    case '/logout':
        $controller = new AuthController();
        echo $controller->logout();
        break;

    default:
        header("HTTP/1.0 404 Not Found");
        echo "Not Found";
        break;
}
