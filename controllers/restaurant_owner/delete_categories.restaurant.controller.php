<?php
require "../../database/database.php";
require "../../models/employee.model.php";

if(isset($_GET['cateid'])){
    deleteCate($_GET['cateid']);
}
header('Location: /all_categories');