<?php
// ----get data from user input------
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Start session if not already started
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Use absolute paths based on __DIR__
    require __DIR__ . '/../../database/database.php';
    require __DIR__ . '/../../models/employee.model.php';

    // Check if required fields are set and not empty
    if (isset($_POST['usernames'], $_POST['gender'], $_POST['phone'], $_POST['email'], $_POST['password'], $_POST['optradio']) &&
        !empty($_POST['usernames']) && !empty($_POST['gender']) && !empty($_POST['phone'])) {

        $usernames = htmlspecialchars($_POST['usernames']);
        $role = htmlspecialchars($_POST['optradio']);
        $gender = htmlspecialchars($_POST['gender']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $crypted = password_hash($password, PASSWORD_BCRYPT);
        $phone = htmlspecialchars($_POST['phone']);
        $userImg = "IMG-65d9f4f69e5411.43011126.jpg";  // Use a dynamic image name based on your logic

        $data = accountExist($email);
        if (count($data) == 0) {
            $signup = addUsers($usernames, $email, $crypted, $gender, $role, $phone, $userImg);
            require __DIR__ . '/../../models/user_info.model.php';
            $user = login($email);

            // Set session variables
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['userid'] = $user['user_id'];
            $_SESSION['emailSignup'] = '';

            // Redirect based on role
            $_SESSION['role'] = $role;
            header('Location: /');
        } else {
            $_SESSION['emailSignup'] = '* Your email already exists!';
            header('Location: /signup');
        }
    } else {
        $_SESSION['emailSignup'] = '';
        header('Location: /signup');
    }
}

