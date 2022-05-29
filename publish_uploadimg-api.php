<?php

    require './part/connect-db.php';
    $sql = "SELECT COUNT(*) FROM `items`;";
    $stmt = $pdo->query($sql)->fetch();
    // echo $stmt['COUNT(*)'];
    $new_item = $stmt['COUNT(*)'] + 1;
    
   
    $_SESSION['item_c'] = $new_item;

    // 下載圖片
    $path = 'imgs/items'.$new_item;
    if(!file_exists($path)){
        mkdir($path);
    }

    $img_arr = $_SESSION['img_arr'];
    $i = 1;
    foreach($img_arr as $i_url) {
        $i_image = file_get_contents($i_url);
        file_put_contents($path.'/item'.$i.'.jpg', $i_image ); //Where to save the image
        $i=$i+1;
    }

    
    $certificate = $_SESSION['certificate'];
    foreach($certificate as $c_url){
        $c_image = file_get_contents($c_url);
        echo $c_url;
        file_put_contents($path.'/certificate.jpg', $c_image ); //Where to save the image
    }
    
    echo json_encode($_SESSION,JSON_UNESCAPED_UNICODE);

    $sql = "INSERT INTO `items`(`item_name`, `roomtype`,`ping_number`, `floor`,`price`,`item_area`,`item_dist`,`item_address`,`contract`,`feature`,`equipment_detail`,`safety_equipment`,`other_cost`,`postulate`,`around`,)VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    
    // `hobby`,`item_info`,`roommate_info`,`room_count`)VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        json_encode($_SESSION['item_name'],JSON_UNESCAPED_UNICODE),
        json_encode($_SESSION['roomtype'],JSON_UNESCAPED_UNICODE),
        json_encode($_SESSION['ping_number'],JSON_UNESCAPED_UNICODE),
        json_encode($_SESSION['floor'],JSON_UNESCAPED_UNICODE),
        json_encode($_SESSION['price'],JSON_UNESCAPED_UNICODE),
        json_encode($_SESSION['item_area'],JSON_UNESCAPED_UNICODE),
        json_encode($_SESSION['item_dist'],JSON_UNESCAPED_UNICODE),
        json_encode($_SESSION['item_address'],JSON_UNESCAPED_UNICODE),
        json_encode($_SESSION['contract'],JSON_UNESCAPED_UNICODE),
        json_encode($_SESSION["物件特色"],JSON_UNESCAPED_UNICODE),
        json_encode($_SESSION["物件設備"],JSON_UNESCAPED_UNICODE),
        json_encode($_SESSION["物件安全設備"],JSON_UNESCAPED_UNICODE),
        json_encode($_SESSION["物件其他費用"],JSON_UNESCAPED_UNICODE),
        json_encode($_SESSION["物件公設"],JSON_UNESCAPED_UNICODE),
        json_encode($_SESSION["周遭機能"],JSON_UNESCAPED_UNICODE),
        // $_SESSION['roomtype'],
        // $_SESSION['ping_number'],
        // $_SESSION['floor'],
        // $_SESSION['price'],
        // $_SESSION['item_area'],
        // $_SESSION['item_dist'],
        // $_SESSION['item_address'],
        // $_SESSION['contract'],
        // $_SESSION["物件特色"],
        // $_SESSION["物件設備"],
        // $_SESSION["物件安全設備"],
        // $_SESSION["物件其他費用"] ,
        // $_SESSION["物件公設"],
        // $_SESSION["周遭機能"],
      ]);


?>


