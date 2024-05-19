<?php

require "../../database/database.php";
require "../../models/employee.model.php";

$data = getRestaurants();
print_r($data[1]); 