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
$router->post('/login', 'controller/login.php');
$router->post('/updateuser', 'controller/upadateuser.php');
$router->post('/addtocart', 'controller/cart.php');
$router->post('/order', 'controller/order.php');
$router->post('/product/update', 'controller/updateproduct.php');
$router->post('/products/create', 'controller/createproduct.php');
$router->post('/deleteproduct', 'controller/deleteproduct.php');
$router->get('/logout', 'controller/logout.php');
$router->get('/checkout', 'controller/checkout.php');
$router->get('/userprofile', 'controller/userprofile.php');
$router->get('/productlisting', 'controller/productlisting.php');
$router->get('/orderlisting', 'controller/orderlisting.php');
$router->get('/userlisting', 'controller/userlisting.php');

$uri = $_SERVER['REQUEST_URI'];
if (strpos($uri, '?') !== false) {
    $uri = substr($uri, 0, strpos($uri, '?'));
}
$router->route($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);




