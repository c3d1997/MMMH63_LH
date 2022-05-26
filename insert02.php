<?php

require __DIR__ . '/part/connect-db.php';


$sql = "INSERT INTO `members`(`name`, `email`, `mobile`,`Password`)
VALUES (?, ?, ?, ?)";

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
