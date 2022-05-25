<?php

require __DIR__ . '/connect-db.php';

$sql = "INSERT INTO `Persons`(`Name`, `phone`, `email`, `checkid`, `password`)VALUES
 (?, ?, ?, ?, ?)";

$stmt = $pdo->prepare($sql);


$stmt->execute([
  $_POST['Name'],
  $_POST['phone'],
  $_POST['email'],
  $_POST['checkid'],
  $_POST['password'],
]);

if ($stmt->rowCount()) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $pdo->error;
}
