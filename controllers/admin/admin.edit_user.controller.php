<?php
session_start();
require "../../database/database.php";
require "../../models/employee.model.php";

$_SESSION['popup'] = showPf($_GET['id']);

header('location: /');
