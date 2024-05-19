
<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/' => 'controllers/delivery/delivery.controller.php',
    '/map'=> 'controllers/delivery/delivery.map.controller.php',
    '/response'=> 'controllers/delivery/delivery.response.order.controller.php'
];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
   http_response_code(404);
   $page = 'views/errors/404.php';
}
require "layouts/admin/header.php";
require "layouts/delivery/navbar.php";
require $page;
require "layouts/admin/footer.php";