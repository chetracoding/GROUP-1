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
    '/printticket' =>'controllers/printticket/printticket.controller.php',
    '/detail/buy' => 'controllers/details/buy.ticket.controller.php'
];

// Add seller pages
if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'seller') {
        $routes['/seller'] = 'controllers/seller/seller.controller.php';
        $routes['/seller/venue'] = 'controllers/seller/seller.venue.controller.php';
        $routes['/seller/venue/createVenue'] = 'controllers/seller/seller.venue.create.controller.php';
        $routes['/seller/createShow'] = 'controllers/seller/seller.show.create.controller.php';
        $routes['/seller/editShow'] = 'controllers/seller/seller.show.edit.controller.php';
        $routes['/seller/editVenue'] = 'controllers/seller/seller.venue.edit.controller.php';
        $routes['/seller/time'] = 'controllers/seller/seller.show.time.controller.php';
        $routes['/seller/time/edit'] = 'controllers/seller/seller.show.time.edit.controller.php';
        $routes['/seller/time/delete'] = 'controllers/seller/seller.show.time.delete.controller.php';
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