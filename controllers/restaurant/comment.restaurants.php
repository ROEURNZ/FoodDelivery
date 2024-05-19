<?php 
session_start();
require "../../database/database.php";
require "../../models/employee.model.php";


if(isset($_POST['comment'])){
    $userID = $_SESSION['userid'];
    $comment = $_POST['comment'];
    $resID = $_GET['id'];
    date_default_timezone_set("Asia/Bangkok");
    $date = date("Y-m-d h:i:sa");

    addCmt($userID, $comment, $date, $resID);
    header('Location: /restaurant?id='.$resID);
}
