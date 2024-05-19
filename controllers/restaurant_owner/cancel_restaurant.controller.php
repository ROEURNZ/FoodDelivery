<?php
session_start();
require "../../database/database.php";
require "../../models/user_info.model.php";

deleteUser($_SESSION['userid']);
session_destroy();

header('Location: /');