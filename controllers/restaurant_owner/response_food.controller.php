<?php
session_start();
require "../../database/database.php";
require "../../models/restaurant.owner.model.php";

if(isset($_GET['time'])){
    $resid = $_SESSION['res_own']['restaurant_id'];
    $time = $_GET['time'];
    orderResponse($resid, $time, 3);
    header("Location: /res_order");
}else{
    echo '<script>alert("You cannot response!"</script>';
    header("Location: /res_order");
}
header("Location: /res_order");



