<?php
require './part/connect-db.php';

// 單選房屋分類
// $dataRental = !empty($_GET['dataRental']) ? intval($_GET['dataRental']) : 3;
// if(in_array($dataRental, [1,2])){
//     $rentalTypes = [
//         '1' => '%共生%',
//         '2' => '%分租%',
//         '3' => '%',
//     ];
//     $where .= sprintf(" AND rentaltype IN ('%s')",$rentalTypes[$dataRental]);
// }
$where = " WHERE 1 ";
$dataRental = !empty($_GET['dataRental']) ? json_decode($_GET['dataRental'], true) : [];
if(!empty($dataRental)){
    $where .= sprintf(" AND rentaltype LIKE '%%%s%%'", implode("','", $dataRental));
}
// 單選地區
$dataArea = !empty($_GET['dataArea']) ? json_decode($_GET['dataArea'], true) : [];
if(!empty($dataArea)){
    $where .= sprintf(" AND item_area LIKE '%%%s%%'", implode("','", $dataArea));
    
}
// 複選詳細地區
$dataItemDist = !empty($_GET['dataItemDist']) ? json_decode($_GET['dataItemDist'], true) : [];
if(!empty($dataItemDist)){
    $where .= sprintf(" AND item_dist IN ('%s')", implode("','", $dataItemDist));
}

// 單選房型
$dataRoom = !empty($_GET['dataRoom']) ? json_decode($_GET['dataRoom'], true) : [];

if(!empty($dataRoom)){
    $where .= sprintf(" AND roomtype LIKE '%%%s%%'", implode("','",$dataRoom));
}
// 複選特色
$dataFeture = !empty($_GET['dataFeture']) ? json_decode($_GET['dataFeture'], true) : [];

if(!empty($dataFeture)){
    $where .= sprintf(" AND feature IN ('%s')", implode("','",$dataFeture));
}
// 單選設備
$dataEquip = !empty($_GET['dataEquip']) ? json_decode($_GET['dataEquip'], true) : [];

if(!empty($dataEquip)){
    $where .= sprintf(" AND equipment LIKE '%%%s%%'", implode("','",$dataEquip));
}
// 復選公設
$dataPostulate = !empty($_GET['dataPostulate']) ? json_decode($_GET['dataPostulate'], true) : [];

if(!empty($dataPostulate)){
    $where .= sprintf(" AND postulate IN ('%s')", implode("','",$dataPostulate));
}
// 復選額外
$dataOtherCost = !empty($_GET['dataOtherCost']) ? json_decode($_GET['dataOtherCost'], true) : [];

if(!empty($dataOtherCost)){
    $where .= sprintf(" AND other_cost IN ('%s')", implode("','",$dataOtherCost));
}

// "SELECT * FROM items WHERE 欄位 LIKE 內容 AND";
$r_sql = "SELECT * FROM items $where";
// $r_sql = "SELECT * FROM items WHERE `rentaltype` LIKE $whereRental ";
$rRows = $pdo->query($r_sql)->fetchAll();

// 以下先不用理他
$f_sql = "SELECT * FROM feature WHERE sid LIKE '1'";
$fRows = $pdo->query($f_sql)->fetchAll();



?>


<!-- 搜尋結果列表 -->
<div class="x-search-list">
    <div class="container">
        <div class="x-search-list-all">
            <div class="x-search-list-state">
                <div class="x-search-list-state-left">
                    <img class="x-content-list" src="imgs/橫列瀏覽.svg" alt="">
                    <img class="x-card-list" src="imgs/方塊瀏覽.svg" alt="">

                </div>
                <div class="x-search-list-state-right">
                    <div>
                        <h3>價格</h3><?= $r_sql ?>
                        <img class="x-down" src="imgs/降冪.svg" alt="">
                        <!-- <img class="x-up" src="imgs/升冪.svg" alt=""> -->
                    </div>
                    <div>
                        <h3>上傳日期</h3>
                        <img class="x-down" src="imgs/降冪.svg" alt="">
                        <!-- <img class="x-up" src="imgs/升冪.svg" alt=""> -->
                    </div>
                    <div>
                        <h3>瀏覽次數</h3>
                        <img class="x-down" src="imgs/降冪.svg" alt="">
                        <!-- <img class="x-up" src="imgs/升冪.svg" alt=""> -->
                    </div>
                </div>
            </div>
            <div class="x-search-list-content-all">
                <?php foreach ($rRows as $i) : ?>
                    <div class="x-search-list-content">
                        <div class="x-search-list-content-img">
                            <ul class="x-search-list-content-img-train">
                                <li>

                                    <img src="<?= $i['item_img'] ?>.jpg" alt="">
                                </li>

                            </ul>

                        </div>
                        <div class="x-search-list-content-txt">
                            <h3>
                                <?= $i['item_name'] ?>
                            </h3>
                            <p>
                                <img src="imgs/捷運.svg" alt=""><?= $i['close_station'] ?>
                            </p>
                            <p>
                                <img src="imgs/位置.svg" alt=""> <?= $i['item_area'], $i['item_dist'], $i['item_address'] ?>
                            </p>
                            <div>
                                <p>
                                    <img src="imgs/坪數.svg" alt=""> <?= $i['ping_number'] ?>
                                </p>
                                <p>
                                    <img src="imgs/格局.svg" alt=""> <?= $i['floor'] ?>
                                </p>
                            </div>

                        </div>
                        <div class="x-search-list-content-icon">
                        <?php foreach ($fRows as $f) : ?>
                            <div>
                                <img src="<?= $f['img'] ?>" alt="">
                                <p>
                                    <?= $f['feature'] ?>
                                </p>
                            </div>
                        <?php endforeach ?>

                        </div>
                        <div class="x-search-list-content-price">
                            <div class="x-search-list-content-price-top">
                                <div class="S-lg-share">
                                    <!-- <img src="imgs/分享.svg" alt=""> -->

                                </div>
                                <div class="S-lg-like">
                                    <svg class="S-lg-svg " width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="25" cy="25" r="25" fill="#F1EDEA" />
                                        <path d="M35.1494 16.0994C34.5629 15.4338 33.8667 14.9058 33.1003 14.5456C32.334 14.1854 31.5126 14 30.6831 14C29.8535 14 29.0321 14.1854 28.2658 14.5456C27.4994 14.9058 26.8032 15.4338 26.2167 16.0994L24.9997 17.48L23.7826 16.0994C22.5981 14.7556 20.9915 14.0007 19.3163 14.0007C17.6411 14.0007 16.0346 14.7556 14.85 16.0994C13.6655 17.4431 13 19.2657 13 21.1661C13 23.0664 13.6655 24.889 14.85 26.2327L16.0671 27.6134L24.9997 37.7467L33.9323 27.6134L35.1494 26.2327C35.7361 25.5675 36.2015 24.7776 36.519 23.9082C36.8366 23.0389 37 22.1071 37 21.1661C37 20.225 36.8366 19.2932 36.519 18.4239C36.2015 17.5545 35.7361 16.7646 35.1494 16.0994Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </div>
                            </div>
                            <div class="x-search-list-content-price-down">
                                <div>
                                    <img src="imgs/瀏覽.svg" alt="">
                                    <p>
                                        瀏覽量：8999
                                    </p>
                                </div>
                                <h3>
                                    $<?= number_format($i['price']) ?>/月
                                </h3>
                            </div>
                        </div>

                    </div>
                <?php endforeach ?>



            </div>
            <div class="x-search-list-card x-search-displaynone">
                <div class="S-lg-card-wrap">
                    <div class="S-lg-share">
                        <!-- <img src="imgs/分享.svg" alt=""> -->

                    </div>
                    <div class="S-lg-like">
                        <svg class="S-lg-svg " width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="25" cy="25" r="25" fill="#F1EDEA" />
                            <path d="M35.1494 16.0994C34.5629 15.4338 33.8667 14.9058 33.1003 14.5456C32.334 14.1854 31.5126 14 30.6831 14C29.8535 14 29.0321 14.1854 28.2658 14.5456C27.4994 14.9058 26.8032 15.4338 26.2167 16.0994L24.9997 17.48L23.7826 16.0994C22.5981 14.7556 20.9915 14.0007 19.3163 14.0007C17.6411 14.0007 16.0346 14.7556 14.85 16.0994C13.6655 17.4431 13 19.2657 13 21.1661C13 23.0664 13.6655 24.889 14.85 26.2327L16.0671 27.6134L24.9997 37.7467L33.9323 27.6134L35.1494 26.2327C35.7361 25.5675 36.2015 24.7776 36.519 23.9082C36.8366 23.0389 37 22.1071 37 21.1661C37 20.225 36.8366 19.2932 36.519 18.4239C36.2015 17.5545 35.7361 16.7646 35.1494 16.0994Z" stroke="#0E2E3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div>
                    <div class="S-lg-card">
                        <div class="S-lg-card-img">
                            <img src="imgs/57 1.jpg">
                        </div>
                        <div class="S-lg-card-info ">
                            <h4>
                                <span><?= $i['item_name'] ?></span> <?= $i['item_area'] ?><?= $i['item_dist'] ?>
                            </h4>
                            <div class="S-lg-card-info-2 ">
                                <p>
                                    <?= $i['roomtype'] ?>
                                </p>
                                <h3>
                                    <?= number_format($i['price']) ?>/月
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>
</div>
