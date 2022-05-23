<?php

$db_host = 'localhost';
$db_name = 'little_house';
$db_user = 'little_house';
$db_pass = 'mmmh6302';

// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name,) ;
// $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `Persons`(`Name`, `phone/id`, `email`, `checkid`, `password`)VALUES
 ('$_POST[Name]','$_POST[phone]','$_POST[email]','$_POST[checkid]','$_POST[password]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>