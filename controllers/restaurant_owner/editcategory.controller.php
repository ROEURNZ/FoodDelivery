<?php

require "../../database/database.php";
require "../../models/employee.model.php";


$cateid = intval($_POST['cateid']);
$catename = $_POST['cate'];
$description = $_POST['description'];

if (isset($_POST['cateid']) && isset($_POST['cate']) && isset($_POST['description'])) {
    updateCate($cateid, $catename, $description);
}
header('Location: /all_categories');