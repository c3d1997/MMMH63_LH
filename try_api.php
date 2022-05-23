<?php 
require './part/connect-db.php';




$t_sql = "SELECT COUNT(1) FROM items";
// 取得筆數
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
echo $totalRows;




// 列出所有資料
$p_sql = "SELECT `item_name`, `area` FROM `items`";
$p = $pdo->query($p_sql)->fetchAll();
echo json_encode($p,JSON_UNESCAPED_UNICODE) ;



?>

