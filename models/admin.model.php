<?php



function getAllUsers()
{
    global $connection;

    $query = "
        SELECT 
            u.user_id,
            u.username,
            u.email,
            u.gender,
            u.phoneNumber,
            u.user_img,
            r.role_type
        FROM 
            users u
        LEFT JOIN 
            roles r ON u.role_id = r.role_id
    ";

    $statement = $connection->prepare($query);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}


function countUsersByRole()
{
    global $connection;

    $query = "
        SELECT 
            r.role_type,
            COUNT(u.user_id) AS user_count
        FROM 
            roles r
        LEFT JOIN 
            users u ON u.role_id = r.role_id
        GROUP BY 
            r.role_type
    ";

    $statement = $connection->prepare($query);
    $statement->execute();
    $userCountsByRole = $statement->fetchAll(PDO::FETCH_ASSOC);

    // Get the total count of users regardless of role
    $queryTotal = "
        SELECT 
            COUNT(user_id) AS total_count
        FROM 
            users
    ";

    $statementTotal = $connection->prepare($queryTotal);
    $statementTotal->execute();
    $totalUsers = $statementTotal->fetch(PDO::FETCH_ASSOC);

    // Add the total count of users to the result array
    $userCountsByRole[] = array('role_type' => 'Total', 'user_count' => $totalUsers['total_count']);

    return $userCountsByRole;
}



function createUsers($username, $email, $password, $gender, $role, $phoneNumber, $userImg)
{
    global $connection;
    $statement = $connection->prepare(" insert into users (username, email, password, gender, role_id, phoneNumber, user_img) values (:username, :email, :password, :gender, :role_id, :phoneNumber, :userImg)");
    $statement->execute([
        ':username' => $username,
        ':email' => $email,
        ':password' => $password,
        ':gender' => $gender,
        ':role_id' => $role,
        ':phoneNumber' => $phoneNumber,
        ':userImg' => $userImg,
    ]);
}





function destroy($user_id)
{
    global $connection;
    $statement = $connection->prepare("DELETE FROM users WHERE user_id = :user_id");
    $statement->execute([
        ':user_id' => $user_id,
    ]);

    header("Location: /");
    exit();
}

function updateUser($name, $phone, $email, $userID, $role): bool
{
    global $connection;
    $statement = $connection->prepare("update users set username = :username, phoneNumber = :phone, email = :email, role_id = :role where user_id = :userID");
    $statement->execute([
        ':username' => $name,
        ':phone' => $phone,
        ':email' => $email,
        ':userID' => $userID,
        ':role' => $role
    ]);
    return $statement->rowCount() > 0;
}
function updateAdmin($name, $email, $phone): bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE users SET username = :username, email = :email, phoneNumber = :phone WHERE user_id = :userID");
    $statement->execute([
        ':username' => $name,
        ':phone' => $phone,
        ':email' => $email,
    ]);
    return $statement->rowCount() > 0;
}
