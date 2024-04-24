<?php

use Core\Router;

$router = new Router();

$router->get('/', 'controller/index.php');
$router->get('/login', 'controller/login.php')->middleware('/login', 'guest');
$router->get('/signup', 'controller/signup.php')->middleware('/userprofile', 'guest');
$router->get('/about', 'controller/about.php');
$router->get('/contact', 'controller/contact.php');
$router->get('/products', 'controller/products.php');
$router->get('/singleproduct', 'controller/singleProduct.php');
$router->get('/admin', 'controller/adminlogin.php');
$router->get('/dashboard', 'controller/adminDashboard.php')->middleware('/dashboard', 'admin');
$router->post('/registration', 'controller/Registration.php');
$router->post('/login', 'controller/login.php');
$router->post('/updateuser', 'controller/upadateuser.php')->middleware('/updateuser', 'auth');
$router->post('/addtocart', 'controller/cart.php')->middleware('/addtocart', 'auth');
$router->post('/order', 'controller/order.php')->middleware('/order', 'auth');
$router->post('/product/update', 'controller/updateproduct.php')->middleware('/product/update', 'admin');
$router->post('/products/create', 'controller/createproduct.php')->middleware('/products/create', 'admin');
$router->post('/deleteproduct', 'controller/deleteproduct.php')->middleware('/deleteproduct', 'admin');
$router->post('/admin/login', 'controller/adminlogin.php');
$router->post('/products/filter','controller/filteproducts.php');
$router->get('/admin/create', 'controller/admincreate.php');
$router->get('/logout', 'controller/logout.php');
$router->get('/checkout', 'controller/checkout.php')->middleware('/checkout', 'auth');
$router->get('/userprofile', 'controller/userprofile.php')->middleware('/userprofile', 'auth');
$router->get('/productlisting', 'controller/productlisting.php')->middleware('/productlisting', 'admin');
$router->get('/orderlisting', 'controller/orderlisting.php')->middleware('/orderlisting', 'admin');
$router->get('/userlisting', 'controller/userlisting.php')->middleware('/userlisting', 'admin');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];;
if (strpos($uri, '?') !== false) {
    $uri = substr($uri, 0, strpos($uri, '?'));
}
$router->route($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);





