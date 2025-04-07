<?php

use App\Core\Helper;

include __DIR__.'/../bootstrap/index.php';

$uri = $_SERVER['REQUEST_URI'];

$routes = [
    '/'=> __DIR__.'/../App/Controllers/HomeController.php'
];



if(array_key_exists($uri, $routes)){
    include $routes[$uri];
}else{
    echo "Page Not Found";
}