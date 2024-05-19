<?php

function createUser($name, $email, $password, $phoneNumber, $gender, $role) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into users (username, email, password, gender, role_id, phoneNumber) values (:username, :email, :password, :gender, :role_id, :phoneNumber)");
    $statement->execute([
        ':username' => $name,
        ':email' => $email,
        ':password' => $password,
        ':gender' => $gender,
        ':role_id' => $role,
        ':phoneNumber' => $phoneNumber,

    ]);

    return $statement->rowCount() > 0;
}

function login($email){
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute([':email' => $email]);
    return $stmt->fetch();
}

function updateInfo($name, $phone, $email, $userID): bool {
    global $connection;
    $statement = $connection->prepare("update users set username = :username, phoneNumber = :phone, email = :email where user_id = :userID");
    $statement->execute([
        ':username'=>$name,
        ':phone'=>$phone,
        ':email'=>$email,
        ':userID'=>$userID,
    ]);
    return $statement->rowCount() > 0;
}

function deleteUser($userid){
    global $connection;
    $statement = $connection->prepare("delete from users where user_id = :userid");
    $statement->execute([':userid'=> $userid]);

}


function Add_New_Food($Name, $description, $price, $cate_id, $img){
    global $connection;
    $statement=$connection->prepare("insert into foods(Foodname, description, price, category_id, food_img) values (:name, :description, :price, :category_id, :food_img)");
    $statement->execute([
        ':name'=> $Name,
        ':description'=> $description,
        ':price'=> $price,
        ':category_id'=> $cate_id,
        ':food_img'=> $img
    ]);
}