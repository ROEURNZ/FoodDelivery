<?php

session_start();
require "../../database/database.php";
require "../../models/foodOrder.model.php";


cancel(5, $_GET['orderid'], $_SESSION['res_own']['restaurant_id']);

header('Location: /res_order');
