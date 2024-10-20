<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// controle de fluxo
define('CONTROL', true);

$routes = require_once('inc/routes.php');
$route = $_GET['route'] ?? 'login';

if(!in_array($route, $routes)){
    $route = '404';
}

switch ($route) {
    case 'login':
        require_once 'pages/login.php';
        break;
    case 'register':
        require_once 'pages/register.php';
        break;
    case 'home':
        require_once 'inc/header.php';
        require_once 'pages/home.php';
        require_once 'inc/footer.php';
        break;
    case '404':
        require_once 'inc/header.php';
        require_once 'pages/404.php';
        require_once 'inc/footer.php';
        break;
}