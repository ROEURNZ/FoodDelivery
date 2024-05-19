<?php
session_start();
require "../../database/database.php";
require "../../models/employee.model.php";

$_SESSION['editFood'];
if(isset($_GET['foodid'])){
    $_SESSION['editFood'] = $_GET['foodid'];
}

header("Location: /all_food");