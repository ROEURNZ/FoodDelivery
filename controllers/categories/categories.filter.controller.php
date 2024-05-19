<?php
session_start();
// require "../../database/database.php";
// require "../../models/employee.model.php";


if (isset($_GET['cateid'])){
    $_SESSION['cateid'] = $_GET['cateid'];
}
// echo $_SESSION['cateid'];
header('Location: /categories');