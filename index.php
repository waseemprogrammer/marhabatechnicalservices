<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");


use App\Core\Helper;

include __DIR__.'/bootstrap/index.php';

$uri = $_SERVER['REQUEST_URI'];

$routes = [
    '/'=> __DIR__.'/App/Controllers/HomeController.php',
    '/about'=> __DIR__.'/App/Controllers/AboutController.php',
    '/contact'=> __DIR__.'/App/Controllers/ContactController.php',
    '/services'=> __DIR__.'/App/Controllers/ServicesController.php',
    '/contact'=> __DIR__.'/App/Controllers/ContactController.php',
    '/blog'=> __DIR__.'/App/Controllers/BlogController.php',
];


if(array_key_exists($uri, $routes)){
    http_response_code(200);
    include $routes[$uri];
    exit;
}else{
   Helper::error('404');
}