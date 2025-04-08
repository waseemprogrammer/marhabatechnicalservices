<?php

use App\Core\Helper;

include __DIR__.'/bootstrap/index.php';

$uri = $_SERVER['REQUEST_URI'];

$routes = [
    '/'=> __DIR__.'/App/Controllers/HomeController.php'
];


if(array_key_exists($uri, $routes)){
    http_response_code(200);
    include $routes[$uri];
    exit;
}else{
   Helper::error('404');
}