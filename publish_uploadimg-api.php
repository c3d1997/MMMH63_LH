<?php
    session_start();
    require './part/connect-db.php';
    $sql = "SELECT COUNT(*) FROM `items`;";
    $stmt = $pdo->query($sql)->fetch();
    // echo $stmt['COUNT(*)'];
    $new_item = $stmt['COUNT(*)'] + 1;
    

    $_SESSION['item_c'] = $new_item;

    // // 下載圖片
    $path = 'imgs/items'.$new_item;
    if(!file_exists($path)){
        mkdir($path);
    }
    $img_arr = json_decode($_POST['img_arr']);
    $i = 1;
    foreach($img_arr as $url) {
        
        $image = file_get_contents($url);

        file_put_contents($path.'/item'.$i.'.jpg', $image ); //Where to save the image
        $i=$i+1;
    }



?>


