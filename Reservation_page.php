<?php 
$title = '預約看房';
require './part/connect-db.php';


// 帶入房屋資料
$sql = "SELECT * FROM `items` WHERE `sid` = 1;";
$stmt = $pdo->query($sql);
$i = $stmt->fetch();

?>

<?php include __DIR__ . './part/head.php'  ?>

    <style>
        /* 自己頁面的css */
        /* 主要區域 */

.container {
    padding: 0 20px;
    position: relative;
}

.S-lg-d-none {
    display: none;
}

.S-Reservation-area {
    /* border: 1px solid red; */
    /* position: absolute; */
    margin-top: 240px;
    text-align: center;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    color: #0E2E3D;
}

.S-Reservation-area h2 {
    font-weight: 700;
    font-size: 32px;
    color: #0E2E3D;
}

.S-Reservation-area h3 {
    font-weight: 700;
    font-size: 24px;
    color: #0E2E3D;
}

.S-Reservation-title {
    font-weight: 900;
    font-size: 32px;
    padding: 0 0 30px 0;
}

.S-Reservation-img {
    width: 908px;
    height: 320px;
    overflow: hidden;
}
.S-Reservation-img img{
    width: 100%;
    height: 100%;
    object-fit: fill;
    object-position: center;
}

.S-Reservation-name {
    font-weight: 900;
    padding: 30px 0 10px 0;
}

.S-Reservation-location {
    padding: 0 0 30px 0;
}


/* --------------------------------btn---------------------------------------------------- */


/* 電腦版長板按鈕 */

.S-Reservation-btn {
    display: flex;
    justify-content: center;
    margin: 60px 0 140px;
}

.pc-button-FEAC00-180 {
    margin-right: 0px;
}

.pc-button-F4F4F4-180 {
    margin-right: 30px;
    margin-left: 0px;
}
.pc-button-F4F4F4-180 a{
    text-decoration: none;
    color: #0E2E3D;
}






/* ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ */


/* 手機版 小於375 */

@media screen and (max-width:376px) {
    .S-xs-d-block {
        display: block;
    }
    .S-Reservation-area {
        margin: auto;
        /* border: 1px solid red; */
        width: 100%;
        margin-top: 100px;
        text-align: center;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    /* .S-Reservation-area h2{
        width: 100%;
        font-weight: 700;
        font-size: 20px;
        color: #0E2E3D;
        color: red;
    
    }
    .S-Reservation-area h3{
        width: 100%;
        font-weight: 700;
        font-size: 16px;
        color: #0E2E3D;
    } */
    .S-Reservation-title {
        font-weight: 900;
        font-size: 32px;
        padding: 0 0 30px 0;
    }
    .S-Reservation-img {
        padding: 0 20px;
        margin: auto;
        width: 100%;
        height: 215 px;
        background: url(imgs/bedroom-5646321_1920.jpg)center center/cover no-repeat;
    }
    .S-Reservation-info {
        display: flex;
        flex-direction: column;
        /* justify-content: flex-start; */
        /* align-items: flex-start; */
    }
    .S-Reservation-price {
        font-size: 24px;
        padding: 20px 0 20px 0;
        text-align: left;
    }
    h2.S-Reservation-name {
        font-weight: 900;
        font-size: 20px;
        padding: 0px 0 20px 0;
        text-align: left;
    }
    h3.S-Reservation-location {
        font-size: 16px;
        padding: 0 0 20px 0;
        text-align: center;
        text-align: left;
    }
    h2.S-Reservation-date {
        font-size: 20px;
        /* padding: 0 0 0px 0; */
        text-align: center;
    }
    /* --------------------------------btn---------------------------------------------------- */
    /* 暫時版按鈕 */
    .S-Reservation-btn {
        display: flex;
        /* flex-direction: row-reverse; */
        justify-content: center;
        margin: 20px 0 40px;
    }
    .pc-button-FEAC00-180 {
        width: 162.5px;
        height: 45px;
        color: #0E2E3D;
        font-weight: bold;
        font-size: 20px;
        border: none;
        background-color: #FEAC00;
    }
    .pc-button-F4F4F4-180 {
        margin-right: 10px;
        width: 162.5px;
        height: 45px;
        color: #0E2E3D;
        font-weight: bold;
        font-size: 20px;
        border: none;
        background-color: #F1EDEA;
    }
}
    </style>

<?php include __DIR__ . './part/nav.php'  ?>

    <!-- 自己頁面的html -->
    <div class="container">
        <div class="row">
            <div class="S-Reservation-area">
                <div class="S-title">
                    <h1 class="S-Reservation-title">預約資訊</h1>
                </div>
                <!-- 間距30px -->
                <div class="S-Reservation-wrap">
                    <div class="S-Reservation">
                        <div class="S-Reservation-img">
                        <img src="<?= $i['img'] ?>item0.jpg" alt="">
                        </div>
                        <div class="S-Reservation-info">
                            <h3 class="S-Reservation-price S-lg-d-none S-xs-d-block">$<?= number_format($i['price']) ?>/月</h3>
                            <h2 class="S-Reservation-name"><?= $i['item_name'] ?></h2>
                            <h3 class="S-Reservation-location">
                                <i class="fa-solid fa-location-dot"></i><?= $i['area'], $i['dist'] ,$i['address'] ?>
                            </h3>
                            <h2 class="S-Reservation-date" id="time">

                            </h2>
                        </div>
                    </div>

                    <div class="S-Reservation-btn">

                        <!-- <button class="pc-button-F4F4F4-180"><a
                                href="../customer_service/customer_service.html">聯絡我們</a></button> -->
                        <button class="pc-button-F4F4F4-180"><a
                                href="customer_service/customer_service.html">聯絡我們</a></button>
                        <button class="pc-button-FEAC00-180" id="show">確定預約</button>
                        <!-- 彈出預約成功視窗 -->


                        <!-- 以下是"預約成功"ReservationSuccess -->
                        <dialog id="infoModal">
                            <div class="ReservationSuccess-wrap">
                                <div class="ReservationSuccess">
                                    <div class="ReservationSuccess-icon">
                                        <i class="fa-solid fa-thumbs-up"></i>
                                    </div>
                                    <h2>預約成功</h2>
                                    <button class="pc-button-FEAC00-272 mobile-button-FEAC00-162" id="close">返回
                                </div>
                                <button class="ReservationSuccess-x" id="close2">
                                    <img src="imgs/X.svg" alt="">
                                </button>
                            </div>
                        </dialog>
                        <!-- 以上是"預約成功"ReservationSuccess -->

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include __DIR__ . './part/footer.php'  ?>

    <script>
        // 自己頁面的script
        let btn = document.querySelector("#show");
        let infoModal = document.querySelector("#infoModal");
        let close = document.querySelector("#close");
        let close2 = document.querySelector("#close2");
        btn.addEventListener("click", function () {
            infoModal.showModal();
        })
        close.addEventListener("click", function () {
            infoModal.close();
        })
        close2.addEventListener("click", function () {
            infoModal.close();
        })
    </script>

<script>
    $(document).ready(function(){
        let data = localStorage.getItem("date");
        data = JSON.parse(data);
        $("#time").text(data)
    })


</script>


<?php include __DIR__ . './part/javascript.php'  ?>
