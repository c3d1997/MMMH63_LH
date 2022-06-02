<?php

    require './part/connect-db.php';
    $sql = "SELECT COUNT(*) FROM `items`;";
    $stmt = $pdo->query($sql)->fetch();
    // echo $stmt['COUNT(*)'];
    $new_item = $stmt['COUNT(*)'] + 1;

    $_SESSION['item_c'] = $new_item;
    $_SESSION['img_arr'] =  json_decode($_POST['img_arr']);
    $_SESSION['roommate_info'] = $_POST['roommate_info'];
    $_SESSION['hobby'] = $_POST['hobby'];
    $_SESSION['item_info'] = $_POST['item_info'];
    $_SESSION['certificate'] = json_decode($_POST['certificate']);
    // 下載圖片
    $path = 'imgs/items'.$new_item;
    if(!file_exists($path)){
        mkdir($path);
    }

    $img_arr = $_SESSION['img_arr'];
    $i = 0;
    foreach($img_arr as $i_url) {
        $i_image = file_get_contents($i_url);
        file_put_contents($path.'/item'.$i.'.jpg', $i_image ); //Where to save the image
        $i=$i+1;
    }

    $c_path = $path.'/certificate';
    if(!file_exists($c_path)){
        mkdir($c_path);
    }
    $certificate = $_SESSION['certificate'];
    foreach($certificate as $c_url){
        $c_image = file_get_contents($c_url);
        echo $c_url;
        file_put_contents($c_path.'/certificate.jpg', $c_image ); //Where to save the image
    }
    
    // echo json_encode($_SESSION,JSON_UNESCAPED_UNICODE);
    // echo json_encode($_SESSION['item_name'],JSON_UNESCAPED_UNICODE);
    
    
    $sql = "INSERT INTO `items`(`item_name`, `roomtype`,`room_count`,`ping_number`, `floor`,`price`,`item_area`,`item_dist`,`item_address`,`contract`,`feature`,`equipment_detail`,`safety_equipment`,`other_cost`,`postulate`,`around`, `hobby`,`item_info`,`roommate_info`)VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    // echo $_SESSION;



    // echo $_SESSION['item_name'];
    // echo $_SESSION['roomtype'];
    // echo $_SESSION['room_count'];
    // echo $_SESSION['ping_number'];
    // echo $_SESSION['floor'];
    // echo $_SESSION['price'];
    // echo $_SESSION['item_area'];
    // echo $_SESSION['item_dist'];
    // echo $_SESSION['item_address'];
    // echo $_SESSION['contract'];
    // echo implode(',',$_SESSION["feature"]);
    // echo implode(',',$_SESSION["equipment_detail"]);
    // echo implode(',',$_SESSION["safety_equipment"]);
    // echo implode(',',$_SESSION["other_cost"]);
    // echo implode(',',$_SESSION["postulate"]);
    // echo implode(',',$_SESSION["around"]);
    // echo implode(',',$_SESSION['hobby']) ;
    // echo $_SESSION['item_info'];
    // echo $_SESSION['roommate_info'];


    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        // json_encode($_SESSION['item_name'],JSON_UNESCAPED_UNICODE),
        // json_encode($_SESSION['roomtype'],JSON_UNESCAPED_UNICODE),
        // json_encode($_SESSION['ping_number'],JSON_UNESCAPED_UNICODE),
        // json_encode($_SESSION['floor'],JSON_UNESCAPED_UNICODE),
        // json_encode($_SESSION['price'],JSON_UNESCAPED_UNICODE),
        // json_encode($_SESSION['item_area'],JSON_UNESCAPED_UNICODE),
        // json_encode($_SESSION['item_dist'],JSON_UNESCAPED_UNICODE),
        // json_encode($_SESSION['item_address'],JSON_UNESCAPED_UNICODE),
        // json_encode($_SESSION['contract'],JSON_UNESCAPED_UNICODE),
        // json_encode($_SESSION['物件特色'],JSON_UNESCAPED_UNICODE),
        // json_encode($_SESSION['物件設備'],JSON_UNESCAPED_UNICODE),
        // json_encode($_SESSION['物件安全設備'],JSON_UNESCAPED_UNICODE),
        // json_encode($_SESSION['物件其他費用'],JSON_UNESCAPED_UNICODE),
        // json_encode($_SESSION['物件公設'],JSON_UNESCAPED_UNICODE),
        // json_encode($_SESSION['周遭機能'],JSON_UNESCAPED_UNICODE),

        // json_encode($_SESSION['item_name']),
        // json_encode($_SESSION['roomtype']),
        // json_encode($_SESSION['ping_number']),
        // json_encode($_SESSION['floor']),
        // json_encode($_SESSION['price']),
        // json_encode($_SESSION['item_area']),
        // json_encode($_SESSION['item_dist']),
        // json_encode($_SESSION['item_address']),
        // json_encode($_SESSION['contract']),
        // json_encode($_SESSION["物件特色"]),
        // json_encode($_SESSION["物件設備"]),
        // json_encode($_SESSION["物件安全設備"]),
        // json_encode($_SESSION["物件其他費用"]),
        // json_encode($_SESSION["物件公設"]),
        // json_encode($_SESSION["周遭機能"]),

        $_SESSION['item_name'],
        $_SESSION['roomtype'],
        $_SESSION['room_count'],
        $_SESSION['ping_number'],
        $_SESSION['floor'],
        $_SESSION['price'],
        $_SESSION['item_area'],
        $_SESSION['item_dist'],
        $_SESSION['item_address'],
        $_SESSION['contract'],
        implode(',',$_SESSION["feature"]),
        implode(',',$_SESSION["equipment_detail"]),
        implode(',',$_SESSION["safety_equipment"]),
        implode(',',$_SESSION["other_cost"]),
        implode(',',$_SESSION["postulate"]),
        implode(',',$_SESSION["around"]),
        implode(',',$_SESSION['hobby']) ,
        $_SESSION['item_info'],
        $_SESSION['roommate_info'],


        // $_SESSION["物件特色"],
        // $_SESSION["物件設備"],
        // $_SESSION["物件安全設備"],
        // $_SESSION["物件其他費用"],
        // $_SESSION["物件公設"],
        // $_SESSION["周遭機能"],
      ]);
      

?>


