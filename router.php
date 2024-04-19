<?php

use Core\Router;

$router = new Router(); 

$router->get('/', 'controller/index.php');
$router->get('/login', 'controller/login.php');
$router->get('/signup', 'controller/signup.php');
$router->get('/about', 'controller/about.php');
$router->get('/contact', 'controller/contact.php');
$router->get('/products', 'controller/products.php');
$router->get('/singleproduct', 'controller/singleProduct.php');
$router->get('/admin', 'controller/adminlogin.php');
$router->get('/dashboard', 'controller/adminDashboard.php');
$router->post('/registration', 'controller/Registration.php');

$uri = $_SERVER['REQUEST_URI'];
if (strpos($uri, '?') !== false) {
    $uri = substr($uri, 0, strpos($uri, '?'));
}
$router->route($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);




