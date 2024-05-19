<?php

require "../../database/database.php";
require "../../models/restaurant.owner.model.php";
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['resname'])){
        $resid = $_SESSION['res_own']['restaurant_id'];
        $resname = $_POST['resname'];
        $resaddress = $_POST['address'];
        $resOpen = $_POST['open'];
        $resClose = $_POST['close'];

        if(isset($_FILES['my_image'])){
            echo"<pre>";
            print_r($_FILES['my_image']);
            echo "</pre>";
        
            $img_name = $_FILES['my_image']['name'];
            $img_size = $_FILES['my_image']['size'];
            $tmp_name = $_FILES['my_image']['tmp_name'];
            $error = $_FILES['my_image']['error'];
        
            if($error === 0){
                if($img_size > 12000000){
                    header('Location: /profile');
                }else{
                   
                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
                    
                    $allowed_exs = array("jpg", "jpeg", "png");
                    if(in_array($img_ex_lc, $allowed_exs)){
                        $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                        $img_upload_path = '../../assets/images/res_img/'.$new_img_name;
                        move_uploaded_file($tmp_name, $img_upload_path);
                        $resimg = $new_img_name;

                        editeRestaurant($resid, $resname, $resimg, $resaddress, $resOpen, $resClose);
                        $_SESSION['res_own'] = getRestaurant($_SESSION['userid']);
                        $_SESSION['success'] = 'success';
                        header('Location: /edite_res');
                }else{
                    header('Location: /edite_res');
                }
        }
        }
        }
    }
}
header('Location: /edite_res');




