 <?php 

$routes = require 'routes.php';

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

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


routeToController($uri, $routes);