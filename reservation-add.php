<?php

require __DIR__ . '/part/connect-db.php';

echo json_decode($_POST["itemName"]);
echo json_decode($_POST["date"]);
echo json_encode($_SESSION["member"]["name"]);


$item_name =  json_decode($_POST["itemName"]);
$item_sid =  json_decode($_POST["itemSid"]);
$date =  json_decode($_POST["date"]);
$members_name = json_encode($_SESSION["member"]["name"],JSON_UNESCAPED_UNICODE);




$sql = "INSERT INTO `reservation`( `item_name`,`item_sid`, `date`,`members_name`)
VALUES ( ?, ?, ?, ?  )";

$stmt = $pdo->prepare($sql);
// // echo $stmt;


$stmt->execute([

    $item_name,
    $item_sid,
    $date ,
    $_SESSION['member']['name'],

]);


