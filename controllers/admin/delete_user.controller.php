<?php
require "../../database/database.php";

$user_id = $_GET['id'];
$query = "DELETE FROM users WHERE user_id = :user_id";
$statement = $connection->prepare($query);
$statement->execute([':user_id' => $user_id]);

header('location: /');
