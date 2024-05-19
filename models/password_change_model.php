<?php

// Require the database connection file
require_once "../../database/database.php";

function validateCurrentPassword($email, $currentPassword)
{
    global $connection; // Access the global database connection

    // Prepare and execute the query to fetch the user's password
    $sql = "SELECT password FROM users WHERE email = :email";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    // Fetch the result
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the user exists and if the current password matches the stored password
    if ($user && password_verify($currentPassword, $user['password'])) {
        return true;
    }
    return false;
}

function validateNewPassword($newPassword)
{
    // Validate the new password, e.g., length, complexity
    return strlen($newPassword) >= 8; // Example: Password must be at least 8 characters long
}

function updatePassword($email, $newPassword)
{
    global $connection; // Access the global database connection

    // Hash the new password
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    // Prepare and execute the query to update the user's password
    $sql = "UPDATE users SET password = :password WHERE email = :email";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':password', $hashedPassword);
    $stmt->bindParam(':email', $email);

    // Execute the query and return true if successful
    $stmt->execute();
}

?>