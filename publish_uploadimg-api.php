<?php
    require './part/connect-db.php';
    $sql = "SELECT COUNT(*) FROM `items`;";
    $stmt = $pdo->query($sql)->fetch();
    // echo $stmt['COUNT(*)'];
    $new_item = $stmt['COUNT(*)'] + 1;
    
// 上傳 單張 與 建立資料夾
// $path = '/imgs/items'.$new_item;
// if(!file_exists($path)){
//     mkdir($path);
// }
// move_uploaded_file($_FILES['mainUpload']['tmp_name'],  $path . '/' .$_FILES['mainUpload']['name']);
// echo $path . '/'
//
    
    $path = 'imgs/items'.$new_item;
    // echo $path
    if(!file_exists($path)){
        mkdir($path);
    }
    $img_arr = json_decode($_POST['img_arr']);
    // echo count($img_arr);
    $i = 1;
    foreach($img_arr as $url) {
        
        $image = file_get_contents($url);

        file_put_contents($path.'/item'.$i.'.jpg', $image ); //Where to save the image
        $i=$i+1;
    }




?>


