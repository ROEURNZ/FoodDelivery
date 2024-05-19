<?php

require "../../database/database.php";
require "../../models/employee.model.php";
session_start();

if(isset($_FILES['my_image'])){
    echo"<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if($error === 0){
        if($img_size > 1200000){
            header('Location: /profile');
        }else{
           
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            
            $allowed_exs = array("jpg", "jpeg", "png");
            if(in_array($img_ex_lc, $allowed_exs)){
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = '../../assets/images/user/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                echo uploadpf($_SESSION['userid'], $new_img_name);
                
                header('Location: /profile');
        }else{
            header('Location: /profile');
        }
}
}
}
header('Location: /profile');
