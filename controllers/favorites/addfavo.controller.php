<?php
session_start();

if(isset($_GET['favoid'])){
    require "../../database/database.php";
    require "../../models/employee.model.php";
    $userID = $_SESSION['userid'];
    $resID = htmlspecialchars($_GET['favoid']);
    addFavorites($resID, $userID);
}

header('Location: /');