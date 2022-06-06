<?php

require __DIR__ . '/part/connect-db.php';

// echo json_decode($_POST["itemName"]);
// echo json_decode($_POST["date"]);
// echo json_encode($_SESSION["member"]["name"]);


$item_name =  json_decode($_POST["itemName"]);
$itemAddress =  json_decode($_POST["itemAddress"]);
$itemPrice =  json_decode($_POST["itemPrice"]);
$item_sid =  json_decode($_POST["itemSid"]);
$date =  json_decode($_POST["date"]);
$contract =  json_decode($_POST["contract"]);
$members_name = json_encode($_SESSION["member"]["name"],JSON_UNESCAPED_UNICODE);





$sql = "INSERT INTO `my_house`(`item_sid`,`members_name`,`item_name`, `date`,`contract`)
VALUES ( ?, ?, ?, ?, ? )";

$stmt = $pdo->prepare($sql);
// // echo $stmt;


$stmt->execute([

    $item_sid,
    $_SESSION['member']['name'],
    $item_name,
    $date ,
    $contract,
    

]);


