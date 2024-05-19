<?php
// session_start();
// session_destroy();
require 'utils/url.php';
require 'database/database.php';
require 'controllers/signin/signin.acc.controller.php';
require 'controllers/signup/show.controller.php';

if (isset($_SESSION["email"])) {
    if ($_SESSION['role'] == 2 && !isset($_SESSION['res_own'])) { 
        require "controllers/restaurant_owner/create_restaurant.controller.php";
    }elseif($_SESSION['role'] == 2 && isset($_SESSION['res_own'])){
        if($_SESSION['res_own'] != ''){
            require "restaurantOwner_router.php";
        }
        else{
            require "controllers/restaurant_owner/create_restaurant.controller.php";
        }
        
    }elseif($_SESSION['role'] == 3){
        require 'delivery_router.php';
    }
    elseif($_SESSION['role'] == 4){
        require "admin_router.php";
    } elseif(isset($_SESSION['paymentCard'])){
        if($_SESSION['paymentCard'] != ''){
            require 'checkout.router.php';
        }else{
            require 'router.php';
        }
    }
    else{
        require 'router.php';
    }
}else{
    require "authentication_router.php";
}



