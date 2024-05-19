<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/' => 'controllers/admin/admin.controller.php',
    '/delivery'=>'controllers/admin/admin.delivery.controller.php',
    '/res_onwer'=>'controllers/admin/admin.res_owner.controller.php',
    '/customer'=>'controllers/admin/admin.customer.controller.php'
];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
   http_response_code(404);
   $page = 'views/errors/404.php';
}
require "layouts/admin/header.php";
require "layouts/admin/navbar.php";
require $page;
require "layouts/admin/footer.php";