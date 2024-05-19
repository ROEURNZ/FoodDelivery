<?php

require "../../database/database.php";
require "../../models/password_change_model.php";


$email = $_POST['email'];
$currentPassword = $_POST['current_password'];
$newPassword = $_POST['new_password'];
$confirmPassword = $_POST['confirm_password'];


if($newPassword == $confirmPassword){

    if (validateCurrentPassword($email, $currentPassword)){
        $newPwd = password_hash($_POST['new_password'], PASSWORD_BCRYPT);
        updatePassword($email, $newPassword);
    }else{
        $_SESSION['errorCurrentPassword'] = "Incorrect current password.";
    }
}else{
    $_SESSION['errorChangePassword'] = "Passwords do not match.";
}
header("Location: /profile");