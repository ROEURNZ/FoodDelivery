<?php


function changUserPwd($userEmai, $newPassword)
{
    global $connection;
    $statement = $connection->prepare("update users set password = :newPassword where email = :userEmail");
    $statement->execute([
        ':userEmail'=> $userEmai,
        ':newPassword' => $newPassword,
    ]);
}