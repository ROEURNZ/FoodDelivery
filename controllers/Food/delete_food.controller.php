<?php
require "../../database/database.php";
require "../../models/employee.model.php";

if(isset($_GET['foodid'])){
    deleteFood($_GET['foodid']);
    echo $_GET['foodid'];
}
header('Location: /all_food');