<?php
session_start();
require "../../../database/database.php";
require "../../../models/restaurant.owner.model.php";
$resId = $_SESSION['res_own']['restaurant_id'];
$customerId = $_POST['customer'];
$time = $_POST['time'];
$content = $_POST['message'];
reviewOrder($resId, $customerId, $time, $content);
header('location: /res_order');