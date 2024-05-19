<?php

session_start();

if(isset($_POST['digit'])){
    $digitPwd = htmlspecialchars($_POST['digit']);
    if($digitPwd == $_SESSION['digit']){
        header('Location: /newPwd');
    }else{
        $_SESSION['erro'] = 'You code is not true.';
        header('Location: /digitCode');
    }
}