<?php
    require './part/connect-db.php';
    $sql = "SELECT COUNT(*) FROM `items`;";
    $stmt = $pdo->query($sql)->fetch();
    // echo $stmt['COUNT(*)'];
    $new_item = $stmt['COUNT(*)'] + 1;
    
// 上傳 單張 與 建立資料夾
// $path = "imgs/item$new_item";
// if(!file_exists($path)){
//     mkdir($path);
// }
// move_uploaded_file($_FILES['mainUpload']['tmp_name'],  $path . '/' .$_FILES['mainUpload']['name']);
// echo $path . '/'
//


?>


