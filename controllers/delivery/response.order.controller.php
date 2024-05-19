<?php
session_start();
require "../../database/database.php";
require "../../models/foodOrder.model.php";

if(!isset($_GET['orderAction'])){
    deliverResponse(4, $_GET['time']);
    $_SESSION['adre'] = $_GET['adre'];
}else{
    $_SESSION['adre'] = '';
}


header('Location: /map');