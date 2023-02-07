<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/home/home.controller.php',
    '/login' => 'controllers/login/login.controller.php',
    '/logout' => 'controllers/logout/logout.controller.php',
    '/register' => 'controllers/register/register.controller.php',
    '/search' => 'controllers/search/search.controller.php',
    '/searchdate' => 'controllers/searchdate/searchdate.controller.php',
    '/detail' => 'controllers/details/detail.controller.php',
    '/printticket' =>'controllers/printticket/printticket.controller.php'
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
   http_response_code(404);
   require 'views/errors/404.php';
   die();
}