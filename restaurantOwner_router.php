<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/' => 'controllers/restaurant_owner/restaurant_owner.controller.php',
    '/all_categories'=> 'controllers/restaurant_owner/all_categories_owner.controller.php',
    '/all_food'=> 'controllers/restaurant_owner/all_food_owner.controller.php',
    '/comment' => 'controllers/restaurant_owner/comment.controller.php',
    '/res_order'=> 'controllers/restaurant_owner/res_order.controller.php',
    '/edite_res'=> 'controllers/restaurant_owner/edite_res.controller.php',
];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
   http_response_code(404);
   $page = 'views/errors/404.php';
}
require "layouts/RestaurantOwner/header.php";
require "layouts/RestaurantOwner/navbar.php";

require $page;
require "layouts/RestaurantOwner/footer.php";