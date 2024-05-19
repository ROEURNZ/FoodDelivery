<?php
session_start();
require "../../database/database.php";
require "../../models/foodOrder.model.php";

if(!isset($_GET['orderAction'])){
    deliverResponse(5, $_GET['time']);
    $_SESSION['adre'] = '';
}
header('Location: /map');