<?php

use Core\Router;

const BASE_PATH = __DIR__ . '/../';
const BASE_PATH2 = __DIR__ . '/';
const MIDDLEWARE_PATH = __DIR__ . '/../Middleware/';

spl_autoload_register(function ($class) {
    $result = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require BASE_PATH . "{$result}.php";
});

$router = new Router();
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
require BASE_PATH . 'router.php';
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
// $router->route($uri,$method);