
<?php
require "database/database.php";
require "models/employee.model.php";
require "models/restaurant.owner.model.php";

$resid = $_SESSION['res_own']['restaurant_id'];
$padding = getFoodOrder($resid, 0);
$responseOrder = getFoodOrder($resid, 3);
$resOwner = showPf($_SESSION['res_own']['user_id']);
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant Owner</title>
  <!-- Link bookstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/images/svg/Logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="vendor/css/style.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="vendor/css/res_order.css">
  <link rel="stylesheet" href="vendor/css/edit_res.css">
  
</head>

<body>
<div class="layer"></div>