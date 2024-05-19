<?php
session_start();
require "../../database/database.php";
require "../../models/resetNewPwd.model.php";


if(isset($_POST['new_password']) && isset($_POST['confirm_password'])){
    if ($_POST['new_password'] == $_POST['confirm_password']){
        $email = $_SESSION['emailChange'];
        $newPwd = htmlspecialchars($_POST['new_password']);
        $newPassword = password_hash($newPwd, PASSWORD_BCRYPT);
        changUserPwd($email, $newPassword);
        header('Location: /');

    }else{
        $_SESSION['erro'] = 'You confirm password need to be the same new password';
        header('Location: /newPwd');
    }
}

