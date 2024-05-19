
<?php

require "database/database.php";
require "models/employee.model.php";
require "models/foodOrder.model.php";

if (isset($_GET['addID'])){
  $food = showFood($_GET['addID']);
  $fl = addTolist();
  session_start();
  $_SESSION = 'true';
  foreach ($fl as $value) {
    if ($value[0] == $_GET['addID']){
      $_SESSION = 'false';
    }
  }
  if ($_SESSION == 'true'){
    addFood($food[0], $food[1], $food[3]);
  }
}
if(isset($_SESSION['cateid'])){
  $categories = getFoodbyCate($_SESSION['cateid']);
 }
$data = getRestaurants();
$foodAdd = addTolist();



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Gurdeep Osahan" />
  <meta name="author" content="Gurdeep Osahan" />
  <link rel="icon" type="image/png" href="assets/images/logo green.png" />
  <title>Food-Delivery</title>

  <link rel="stylesheet" type="text/css" href="vendor/slick/slick.min.css" />
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.min.css" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css" />

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

  <link href="vendor/css/style.css" rel="stylesheet" />

  <link href="vendor/sidebar/demo.css" rel="stylesheet" />
  <link href="vendor/css/res_table.css" rel="stylesheet" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="fixed-bottom-bar">