<?php
session_start();
require "../../database/database.php";
require "../../models/user_info.model.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['phone'])){
        $name = $_POST['username'];
        $phonNumber = $_POST['phone'];
        $email = $_POST['email'];
        $userID = $_SESSION['userid'];

        updateInfo($name, $phonNumber, $email, $userID);
        header('Location: /profile');
        
    }
}


