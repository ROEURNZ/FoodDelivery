<?php
session_start();
require "../../database/database.php";
require "../../models/restaurant.owner.model.php";



$userid  = $_SESSION['userid'];
$resname = $_POST['resname'];
$address = $_POST['address'];
$timeopen = strval($_POST['open']);
$timeclose = strval($_POST['close']);
$resDes = $_POST['description'];
createRes($resname, $address, $resDes, $userid, $timeopen, $timeclose);
$_SESSION['res_own'] = getRestaurant($userid);


header('Location: /');