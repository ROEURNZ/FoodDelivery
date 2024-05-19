<?php 
session_start();
require "../../database/database.php";
require "../../models/employee.model.php";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['cate']) && isset($_POST['description'])) {
        # code...
        $cateName = htmlspecialchars($_POST['cate']);
        $description = htmlspecialchars($_POST['description']);
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
                        $img_upload_path = '../../assets/images/icons/'.$new_img_name;
                        move_uploaded_file($tmp_name, $img_upload_path);
                        echo $new_img_name;
                }else{
                    $new_img_name = "Coffee.png";
                }
        }
        }else{
            $new_img_name = "Coffee.png"; 
        }
        }else{
            $new_img_name = "Coffee.png";  
        }
        if($cateName != '' && $new_img_name != ''){

            addCategories($cateName, $description,  $new_img_name);
            $cateid = getCateLimited()['category_id'];
            addToresCate($cateid, $_SESSION['res_own']['restaurant_id']);
            header('Location: /all_categories');
        }
    }else{
        header('location: /all_categories');
    }
}
header('location: /all_categories');

