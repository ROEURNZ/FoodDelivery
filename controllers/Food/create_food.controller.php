<?php
session_start();
require "../../database/database.php";
require "../../models/user_info.model.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['food']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['cate_id'])) {
        $Name = htmlspecialchars($_POST['food']);
        $description = htmlspecialchars($_POST['description']);
        $price = htmlspecialchars($_POST['price']);
        $cate_id = htmlspecialchars($_POST['cate_id']);
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
                        $img_upload_path = '../../assets/images/food/'.$new_img_name;
                        move_uploaded_file($tmp_name, $img_upload_path);
                    }else{
                    $new_img_name = "popular3.png";
                }
        }
        }else{
            $new_img_name = 'popular3.png';
        }
        }else{
            
            $new_img_name = "popular3.png";
        }

        if($Name != '' && $price != '' && $cate_id != ''){
            Add_New_Food($Name, $description, $price, $cate_id, $new_img_name);
            header('Location: /all_food');
        }else{
            header('location: /all_food');
        }
    }
}
header('location: /all_food');

