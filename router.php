<?php
session_start();

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// Customer pages
$routes = [
    '/' => 'controllers/home/home.controller.php',
    '/login' => 'controllers/login/login.controller.php',
    '/logout' => 'controllers/logout/logout.controller.php',
    '/register' => 'controllers/register/register.controller.php',
    '/search' => 'controllers/search/search.controller.php',
    '/searchdate' => 'controllers/searchdate/searchdate.controller.php',
    '/detail' => 'controllers/details/detail.controller.php',
    '/listtickets' => 'controllers/listtickets/listtickets.controller.php',
    '/printticket' =>'controllers/printticket/printticket.controller.php'
];

// Add seller pages
if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'seller') {
        $routes['/seller'] = 'controllers/seller/seller.controller.php';
        $routes['/seller/venue'] = 'controllers/seller/seller.venue.controller.php';
    }

}

// Page routing
if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
   http_response_code(404);
   require 'views/errors/404.php';
   die();
}