<?php
// require('../../database/database.php');
// require('../../models/admin.model.php');
// require('../../models/employee.model.php');
// require('../../models/user_info.model.php');
// // Include the file containing database connection and user functions

// // PHP code for handling form submissions
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     if (isset($_POST['send'])) {
//         if ($_POST['send'] === 'add') {
//             // Code to add a new user
//             // Retrieve form data
//             $username = $_POST['username'];
//             $email = $_POST['email'];
//             $password = $_POST['password'];
//             $phoneNumber = $_POST['number'];
//             $role = $_POST['role'];

//             // Call the function to add a new user
//             addUsers($username, $email, $password, $phoneNumber, $role);
//         } elseif ($_POST['send'] === 'update') {
//             // Code to update user info
//             // Retrieve form data
//             $user_id = $_POST['user_id'];
//             $username = $_POST['username'];
//             $email = $_POST['email'];
//             $phoneNumber = $_POST['number'];
//             $role = $_POST['role'];

//             // Call the function to update user info
//             updateUser($user_id, $username, $email, $phoneNumber, $role);
//         } elseif ($_POST['send'] === 'delete') {
//             // Code to delete user
//             // Retrieve user ID
//             $user_id = $_POST['user_id'];

//             // Call the function to delete user
//             deleteUser($user_id);
//         }
//     }
// }
