<?php

require __DIR__ . '/part/connect-db.php';

echo json_decode($_POST["itemName"]);
echo json_decode($_POST["contract"]);
echo json_encode($_SESSION["member"]["name"]);


$item_name =  json_decode($_POST["itemName"]);
$item_sid =  json_decode($_POST["itemSid"]);
$contract =  json_decode($_POST["contract"]);
$members_name = json_encode($_SESSION["member"]["name"],JSON_UNESCAPED_UNICODE);




$sql = "INSERT INTO `myhouse`( `item_name`,`item_sid`, `contract`,`members_name`)
VALUES ( ?, ?, ?, ?  )";

$stmt = $pdo->prepare($sql);
// // echo $stmt;


$stmt->execute([

    $item_name,
    $item_sid,
    $contract ,
    $_SESSION['member']['name'],

]);


