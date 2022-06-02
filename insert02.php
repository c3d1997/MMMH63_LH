<?php

require __DIR__ . '/part/connect-db.php';


$output = [
  'success' => false,
  'error' => '',
  'code' => 0,
  'postData' => $_POST,  // 確認資料
];
header('Content-Type: application/json');

// TODO: 檢查欄位資料
if (empty($_POST['name'])) {
  $output['error'] = '沒有姓名資料';
  echo json_encode($output, JSON_UNESCAPED_UNICODE);
  exit;
}




$sql = "INSERT INTO `members`(`name`, `email`, `mobile`,`Password`, created_at)
VALUES (?, ?, ?, ?, NOW())";

$stmt = $pdo->prepare($sql);
// echo $stmt;


$stmt->execute([
  $_POST['name'],
  $_POST['email'],
  $_POST['mobile'],
  $_POST['Password'],
]);

$output['rowCount'] = $stmt->rowCount();

if ($stmt->rowCount() == 1) {
  $output['success'] = true;
  $output['msg'] =  "New record created successfully";
} else {
  $output['error'] = '新增失敗';
}

echo json_encode($output);
