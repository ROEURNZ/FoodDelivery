<?php

function createRes($resname, $address, $resDes, $userid, $timeopen, $timeclose){
    global $connection;
    $statement = $connection->prepare("insert into restaurants(restaurant_name, address, time_open, description, user_id, time_close) values (:resname, :address, :timeopen, :resDes, :userid, :timeclose)");
    $statement->execute([
        ':resname'=> $resname,
        ':address'=> $address,
        ':timeopen'=> $timeopen,
        ':resDes'=> $resDes,
        ':userid'=> $userid,
        ':timeclose'=> $timeclose,
    ]);
}

function getRestaurant($userid){
    global $connection;
    $statement = $connection->prepare("select * from restaurants where user_id = :userid");
    $statement->execute([':userid'=>$userid]);
    return $statement->fetch();
}

function getFoodOrder($resid, $action){
    global $connection;
    $statement = $connection->prepare("select * from orderdetails where restaurant_id = :resid && action = :action group by time");
    $statement->execute([
        ':resid'=> $resid,
        ':action'=> $action
    ]);
    return $statement->fetchAll();
}
function getFoodOrdered($resid, $action){
    global $connection;
    $statement = $connection->prepare("select sum(quantity), foodname, sum(total_price), time from orderdetails where restaurant_id = :resid && action = :action group by foodname order by quantity asc");
    $statement->execute([
        ':resid'=> $resid,
        ':action'=> $action
    ]);
    return $statement->fetchAll();
}

function orderbyTimeInres($resid, $time, $actoin){
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM orderdetails WHERE restaurant_id = :resid && action = :action && time = :time");
    $stmt->execute([
        ':resid'=> $resid,
        ':time'=> $time,
        ':action'=> $actoin
    ]);
    return $stmt->fetchAll();
}


function orderResponse($resid, $time, $action){
    global $connection;
    $statement = $connection->prepare("update orderdetails set action = :action where restaurant_id = :res_id && time = :time");
    $statement->execute([
        ":res_id"=> $resid,
        ":time"=> $time,
        ":action"=> $action,
    ]);
}

function editeRestaurant($resid, $resname, $resimg, $resAddress, $resOpen, $resClose){
    global $connection;
    $statement = $connection->prepare("update restaurants set restaurant_name = :resname, address = :resaddress, time_open = :resOpen, time_close = :resClose, res_img = :resimg where restaurant_id = :resid");
    $statement->execute([
        ':resname'=> $resname,
        ':resaddress'=> $resAddress,
        ':resOpen'=> $resOpen,
        ':resClose'=> $resClose,
        ':resimg'=> $resimg,
        ':resid'=> $resid,
    ]);
}

function sumMoney($resid){
    global $connection;
    $statement = $connection->prepare("select sum(total_price) from orderdetails where restaurant_id = :resid && action = 5");
    $statement->execute([':resid'=> $resid]);
    return $statement->fetch();
}

function sumOrder($resid){
    global $connection;
    $statement = $connection->prepare("select count(user_id) from orderdetails where restaurant_id = :resid group by user_id");
    $statement->execute([':resid'=> $resid]);
    return $statement->fetch();
}


function sumCancelOrder(){
    global $connection;
    $statement = $connection -> prepare("select count(user_id) from orderdetails where action = 5");
    $statement->execute();
    return $statement->fetch();
}


function reviewOrder($resId, $customerId, $time, $content){
    global $connection;
    $statement = $connection->prepare("insert into orders (date, user_id, restaurant_id, content) values (:date, :user_id, :restaurant_id, :content)");
    $statement->execute([
        ':date'=>$time,
        ':user_id'=>$customerId,
        ':restaurant_id'=> $resId,
        ':content'=> $content
    ]);
}

function customerReview($time){
    global $connection;
    $statement = $connection->prepare("select * from orders where date = :time");
    $statement->execute([':time'=> $time]);
    return $statement->fetchAll();
}