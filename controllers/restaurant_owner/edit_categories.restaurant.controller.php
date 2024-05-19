<?php
session_start();
require "../../database/database.php";
require "../../models/employee.model.php";

$_SESSION['editCate'] = '';
if(isset($_GET['cateid'])){
    $_SESSION['editCate'] = $_GET['cateid'];
    $_SESSION['cate'] = getCatebyId($_GET['cateid']);
}

header("Location: /all_categories");