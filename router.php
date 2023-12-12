<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

/* Declarating the routes */
$routes = [
    '/laracastsWeb/' => 'controllers/index.php',
    '/laracastsWeb/about' => 'controllers/about.php',
    '/laracastsWeb/contact' => 'controllers/contact.php',
    '/laracastsWeb/ourMission' => 'controllers/ourMission.php'
];

/* Function to handle routing (uri --> one of the routes)*/
function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    };
}

/* Abort with the given status code */
function abort($code = 404) {

    http_response_code($code);

    require "views/{$code}.php";

    die();
}

routeToController($uri, $routes);