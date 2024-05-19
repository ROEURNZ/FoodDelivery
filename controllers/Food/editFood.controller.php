<?php

require "../../database/database.php";
require "../../models/employee.model.php";


$foodid = $_POST['food_id'];
$foodname = $_POST['food'];
$description = $_POST['description'];
$price = $_POST['price'];
updateFood($foodid, $foodname, $description,$price);

header('Location: /all_food');
