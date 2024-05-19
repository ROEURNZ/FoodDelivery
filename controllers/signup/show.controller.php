
<?php
// ----get data from user input------
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // TO DO-----------
    session_start();
    require "../../database/database.php";
    require "../../models/employee.model.php";
    if (isset($_POST['usernames']) && !empty($_POST['usernames'] && !empty($_POST['gender'] && !empty($_POST['phone'])))){
        $usernames = htmlspecialchars($_POST['usernames']);
        $role = htmlspecialchars($_POST['optradio']);
        // $role = '2';
        $gender = htmlspecialchars($_POST['gender']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $crypted = password_hash($password, PASSWORD_BCRYPT);
        $phone = htmlspecialchars($_POST["phone"]);
        $userImg = "IMG-65d9f4f69e5411.43011126.jpg";

        $data = accountExist($email);
        if(count($data) == 0){
            $singup = addUsers($usernames, $email, $crypted, $gender, $role, $phone, $userImg);
            require "../../models/user_info.model.php";
            $user = login($email);
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            $_SESSION['userid'] = $user['user_id'];
            $_SESSION['emailSingup'] = '';

            if($role == 1){
                $_SESSION['role'] = $role;
                header('Location: /');
            }elseif($role == 2){
                $_SESSION['role'] = $role;
                header('Location: /');
            }elseif($role == 3){
                $_SESSION['role'] = $role;
                header('Location: /');
            }
            
        }else{
            $_SESSION['emailSingup'] = '* Your email has already exist!';
            header('Location: /signup');
        }

    }else{
        $_SESSION['emailSingup'] = '';
        header('Location: /singnup');
    }
}





