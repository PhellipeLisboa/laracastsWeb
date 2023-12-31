 <?php 


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

    require base_path("views/{$code}.php");

    die();
}

$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//dd($routes[$uri]);

routeToController($uri, $routes);